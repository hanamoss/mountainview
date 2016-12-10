<?php

namespace CrowdValley\Bundle\AuthBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;
use Guzzle\Http\Client;
use CrowdValley\Bundle\AuthBundle\Security\Encrypt;
use CrowdValley\Bundle\AuthBundle\Security\Header;
use Guzzle\Http\Exception\ServerErrorResponseException;

class UserService
{

    protected $container;
    protected $end_point;
    protected $session;

    public function __construct($container, $end_point, Session $session)
    {
        $this->container = $container;
        $this->end_point = $end_point;
        $this->session = $session;
        $this->network = $this->session->get('cv_network') ? $this->session->get('cv_network') : $this->container->getParameter('cv_network');
    }

    public function getToken()
    {
        $username = $this->session->get('username');
        $encryptedPass = $this->session->get('password');
        $apiKey = $this->container->getParameter('cv_api_key');
        $apiSecret = $this->container->getParameter('cv_api_secret');

        $header = new Header($apiKey, $apiSecret);
        $token = $header->createToken($username, $encryptedPass);
        return $token;
    }

    public function getTokenNewUser()
    {
        $username = 'new';
        $encryptedPass = 'new';
        $apiKey = $this->container->getParameter('cv_api_key');
        $apiSecret = $this->container->getParameter('cv_api_secret');

        $header = new Header($apiKey, $apiSecret);
        $token = $header->createToken($username, $encryptedPass);
        return $token;
    }

    public function getUser()
    {
        $token = $this->getToken();

        $client = $this->container->get('client');
        $request = $client->get('v1/' . $this->getNetwork() . '/self', array('cv-auth' => $token, 'network' => $this->getNetwork()));
        $response = $request->send();
        $responseBody = $response->getBody();
        $responseArray = json_decode($responseBody, true);
        return $responseArray;
    }

    public function getUserInfo()
    {
        return $this->getUser()['data']['user'];
    }

    public function getNetwork()
    {
        $this->network = $this->session->get('cv_network') ? $this->session->get('cv_network') : $this->container->getParameter('cv_network');
        return $this->network;
    }
}
