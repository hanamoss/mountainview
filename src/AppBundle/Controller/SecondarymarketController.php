<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Util\Util;
use AppBundle\Form\SignInType;
use CrowdValley\Bundle\ClientBundle\Entity\User;
use CrowdValley\Bundle\ClientBundle\Entity\CVException;
use CrowdValley\Bundle\ClientBundle\Entity\CVResponse;

class SecondarymarketController extends Controller
{
    /**
     * @Route("/secondary-market", name="secondary_market")
     */
    public function secondaryMarketAction()
    {
        $this->params['menu_item']= 'secondary_market';
        return $this->render('AppBundle:Secondarymarket:secondary_market.html.twig',$this->params);
    }
}
