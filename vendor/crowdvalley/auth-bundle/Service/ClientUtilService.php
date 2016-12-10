<?php
namespace CrowdValley\Bundle\AuthBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class ClientUtilService
{
    protected $network;
    protected $client;
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->network = $container->getParameter('cv_network');
        $this->client = $container->get('client');
        $this->container = $container;
    }

    public function getAPI($apiType, $apiURL, $newUserToken = null)
    {
        if($newUserToken)
            $token = $newUserToken;
        else
            $token = $this->container->get('user')->getToken();

        $request = $this->client->get($this->getAPIprefix($apiType).$this->network.'/'.$apiURL, 
            array('cv-auth' => $token, 
                  'network' => $this->network) 
        );
        return $this->processRequest($request);
    }

    public function deleteAPI($apiType, $apiURL)
    {
        $token = $this->container->get('user')->getToken();
        $request = $this->client->delete($this->getAPIprefix($apiType).$this->network.'/'.$apiURL, 
            array('cv-auth' => $token, 
                  'network' => $this->network) 
        );
        return $this->processRequest($request);
    }

    public function postAPI($apiType, $apiURL, $parameters, $newUserToken = null)
    {
        if($newUserToken)
            $token = $newUserToken;
        else
            $token = $this->container->get('user')->getToken();

        $request = $this->client->post($this->getAPIprefix($apiType).$this->network.'/'.$apiURL, 
            array('cv-auth' => $token, 
                  'network' => $this->network) 
        );
        $request->setBody(json_encode($parameters), 'application/json');
        return $this->processRequest($request);
    }

    public function patchAPI($apiType, $apiURL, $parameters, $newUserToken = null)
    {
        if($newUserToken)
            $token = $newUserToken;
        else
            $token = $this->container->get('user')->getToken();

        $request = $this->client->patch($this->getAPIprefix($apiType).$this->network.'/'.$apiURL, 
            array('cv-auth' => $token, 
                  'network' => $this->network) 
        );
        $request->setBody(json_encode($parameters), 'application/json');
        return $this->processRequest($request);
    }

    public function putAPI($apiType, $apiURL, $parameters, $newUserToken = null)
    {
        if($newUserToken)
            $token = $newUserToken;
        else
            $token = $this->container->get('user')->getToken();

        $request = $this->client->put($this->getAPIprefix($apiType).$this->network.'/'.$apiURL, 
            array('cv-auth' => $token, 
                  'network' => $this->network) 
        );
        $request->setBody(json_encode($parameters), 'application/json');
        return $this->processRequest($request);
    }

    protected function processRequest($request)
    {
        $responseBody = '';
        try
        {
            $response = $request->send();
            $responseBody= $response->getBody();
        }
        catch(ServerErrorResponseException $e)
        {
            if ($e->getResponse())
                $responseBody =  $e->getResponse()->getBody();
        }
        catch(BadResponseException $e)
        {
            if ($e->getResponse())
                $responseBody =  $e->getResponse()->getBody();
        }
        return json_decode($responseBody, true);
    }

    private function getAPIprefix($apiType)
    {
        return 'v1/'. ($apiType == 'api'?'':$apiType.'/');
    }
}
