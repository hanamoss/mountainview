<?php

namespace CrowdValley\Bundle\AuthBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;
use CrowdValley\Bundle\AuthBundle\Security\Encrypt;
use CrowdValley\Bundle\AuthBundle\Security\Header;

class PublicService
{
    protected $container;
    protected $end_point;
    protected $api_key;
    protected $api_secret;
    protected $session;

    public function __construct($container, $end_point, $api_key, $api_secret, Session $session)
    {
        $this->container = $container;
        $this->end_point = $end_point;
        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
        $this->session = $session;
    }

    public function authenticate($network, $username, $password)
    {
        $this->session->set('username', $username);
        $encrypt = new Encrypt();
        $encryptedPass = $encrypt->encrypt($password, $this->api_secret);
        $this->session->set('password', $encryptedPass);
        $token = $this->container->get('user')->getToken();
        $client = $this->container->get('client');
        $request = $client->get('v1/'.$network.'/authenticate', array('cv-auth' => $token, 'network' => $network) );
        $response = '';
        try {
            $response = $request->send();
        }
        catch(\Exception $e) {
            return false;
        }
        $responseBody= $response->getBody();
        $responseArray = json_decode($responseBody, true);
        return $responseArray;

    }

}
