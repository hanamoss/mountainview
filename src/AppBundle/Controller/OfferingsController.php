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

class OfferingsController extends Controller
{

    /**
     * @Route("/property/overview", name="property_overview")
     */
    public function propertyOverviewAction()
    {
        $this->params['menu_item']= 'properties';
        return $this->render('AppBundle:Offerings:property_overview.html.twig',$this->params);
    }

    /**
     * @Route("/properties/debt", name="properties-debt")
     */
    public function propertiesDebtAction()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'loan') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'real_estate') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'debt';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'debt';
        return $this->render('AppBundle:Offerings:offerings.html.twig',$this->params);
    }

    /**
     * @Route("santa-maria", name="santa-maria")
     */
    public function propertySantaMaria()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'loan') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'real_estate') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'debt';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'debt';
        return $this->render('AppBundle:Offerings:residencial-santa-maria-panama.html.twig',$this->params);
    }

     /**
     * @Route("san-francisco-mall", name="san-francisco-mall")
     */
    public function propertySanFranciscoMall()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'loan') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'real_estate') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'debt';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'debt';
        return $this->render('AppBundle:Offerings:san-francisco-mall-panama.html.twig',$this->params);
    }
     /**
     * @Route("vista-mar-golf-village", name="vista-mar-golf-village")
     */
    public function propertyVistaMarGolfVillage()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'loan') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'real_estate') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'debt';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'debt';
        return $this->render('AppBundle:Offerings:vista-mar-golf-village.html.twig',$this->params);
    }

    /**
     * @Route("bacata", name="bacata")
     */
    public function propertyBacata()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'loan') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'real_estate') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'debt';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'debt';
        return $this->render('AppBundle:Offerings:bacata.html.twig',$this->params);
    }

    /**
     * @Route("western-logistic-center", name="western-logistic-center")
     */
    public function propertyWesternLogistic()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'loan') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'real_estate') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'debt';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'debt';
        return $this->render('AppBundle:Offerings:western-logistic-center-panama.html.twig',$this->params);
    }

    /**
     * @Route("/properties/equity", name="properties-equity")
     */
    public function propertiesEquityAction()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'equity') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'real_estate') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'equity';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'properties';
        return $this->render('AppBundle:Offerings:offerings.html.twig',$this->params);
    }

    /**
     * @Route("/companies/debt", name="companies-debt")
     */
    public function companiesDebtAction()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'loan') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'private_company') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'debt';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'debt';
        return $this->render('AppBundle:Offerings:offerings.html.twig',$this->params);
    }

    /**
     * @Route("/companies/equity", name="companies-equity")
     */
    public function companiesEquityAction()
    {
        $offeringArray = array(); $offeringList = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('offering')->getOfferings();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                !empty($cvResponse->objectList) ? $this->objToArray($cvResponse->objectList, $offeringArray) : array();
                foreach ($offeringArray as $k => $offering) {
                    if ($offering['additionalType'] == 'equity') {
                        $organization = $this->get('organization')->getOrganizationWithId($offering['organization']);
                        if ($organization->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                            if (!empty($organization->object)) {
                                $this->objToArray($organization->object, $orgArray);
                                if ($orgArray['additionalType'] == 'private_company') {
                                    $offeringList[$k] = $offering;
                                    $offeringList[$k]['organization'] = $orgArray;
                                }
                            }
                        }
                    }
                }
            }
        }
        $this->params['type']= 'equity';
        $this->params['offerings']= $offeringList;
        //$this->params['menu_item']= 'equity';
        return $this->render('AppBundle:Offerings:offerings.html.twig',$this->params);
    }
    
    /**
     * @Route("/debt/overview/{offering_id}", name="debt_overview")
     */
    public function debtOverviewAction($offering_id)
    {
        $offering = [];
        $organization = [];
        if ($this->get('session')->get('authenticated') == true) {

            $cvResponse = $this->get('offering')->getOfferingWithId($offering_id);

            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

                $offering = $cvResponse->object;

                $cvResponse = $this->get('organization')->getOrganizationWithId($offering->organization);

                if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

                    $organization = $cvResponse->object;
                }
            }
        }
        $this->params['offering']= $offering;
        $this->params['organization']= $organization;
        $this->params['type']= 'debt';
        return $this->render('AppBundle:Offerings:overview.html.twig',$this->params);
    }

    /**
     * @Route("/equity/overview/{offering_id}", name="equity_overview")
     */
    public function equityOverviewAction($offering_id)
    {
        $offering = [];
        $organization = [];
        if ($this->get('session')->get('authenticated') == true) {

            $cvResponse = $this->get('offering')->getOfferingWithId($offering_id);

            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

                $offering = $cvResponse->object;

                $cvResponse = $this->get('organization')->getOrganizationWithId($offering->organization);

                if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

                    $organization = $cvResponse->object;
                }
            }
        }
        $this->params['offering']= $offering;
        $this->params['organization']= $organization;
        $this->params['type']= 'equity';
        return $this->render('AppBundle:Offerings:overview.html.twig',$this->params);
    }

    /**
     * @Route("/offerings/v3", name="offerings_v3")
     */
    public function offeringsV3Action()
    {
        $this->params['menu_item']= 'offerings_v3';
        return $this->render('AppBundle:Public:offerings_v3.html.twig',$this->params);
    }

    /**
     * @Route("/offerings/overview/{offering_id}", name="offerings_overview")
     */
    public function offeringsOverviewAction($offering_id = 30)
    {   
        $offering = [];
        $organization = [];
        
        $cvResponse = $this->get('public')->getOfferingWithId($offering_id);

        if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
        
        	$offering = $cvResponse->object;
        	
			$cvResponse = $this->get('public')->getOrganizationWithId($offering->organization);
		
			if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
		
				$organization = $cvResponse->object;
			}
        }
        
        $form = $this->createForm(new SignInType());
                
        $this->params['authenticated'] = $this->get('session')->get('authenticated');
        $this->params['form'] = $form->createView();
        $this->params['signin_redirect'] = 'offerings_overview';                
        $this->params['offering']= $offering;
        $this->params['organization']= $organization;
        $this->params['menu_item']= 'offerings_overview';
        return $this->render('AppBundle:Offerings:offerings_overview.html.twig',$this->params);
    }


    /**
     * @Route("/invest-popup", name="invest_popup")
     */
    public function investPopupAction()
    {
        $this->params['menu_item']= 'my-wallet';
        return $this->render('AppBundle:Offerings:invest_popup.html.twig',$this->params);
    }

    function objToArray($obj, &$arr){

        if(!is_object($obj) && !is_array($obj)){
            $arr = $obj;
            return $arr;
        }

        foreach ($obj as $key => $value)
        {
            if (!empty($value))
            {
                $arr[$key] = array();
                $this->objToArray($value, $arr[$key]);
            }
            else
            {
                $arr[$key] = $value;
            }
        }
        return $arr;
    }
}
