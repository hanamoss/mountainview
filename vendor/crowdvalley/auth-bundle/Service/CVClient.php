<?php

namespace CrowdValley\Bundle\AuthBundle\Service;

use Guzzle\Http\Client;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
/**
 * HTTP client based on Guzzle
 */
class CVClient extends Client
{
    public function __construct($container, $endPoint, $baseUrl = '')
    {
        $this->container = $container;
        $config = array();
        if ($this->container->hasParameter('cv_api_basic_user')) {
            $config = array('request.options' => array(
                'auth' => array(
                    $this->container->getParameter('cv_api_basic_user'),
                    $this->container->getParameter('cv_api_basic_pass'),
                    'Basic')
            ));
        }

        parent::__construct($endPoint, $config); // second param is config which is null and can be set via setConfig method
        $this->setSslVerification(false, 0, 0);
        $this->setDefaultOption('cv-auth',$this->container->get('user')->getToken());
    }
}
