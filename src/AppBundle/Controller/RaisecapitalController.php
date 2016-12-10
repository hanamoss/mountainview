<?php
namespace AppBundle\Controller;

use CrowdValley\Bundle\ClientBundle\Entity\Offering;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Util\Util;
use AppBundle\Form\SignInType;
use AppBundle\Form\SignUpType;
use AppBundle\Form\OrgRealEstateType;
use AppBundle\Form\OrgPrivateCompanyType;
use AppBundle\Form\DebtOfferingType;
use AppBundle\Form\EquityOfferingType;
use CrowdValley\Bundle\ClientBundle\Entity\User;
use CrowdValley\Bundle\ClientBundle\Entity\Organization;
use CrowdValley\Bundle\ClientBundle\Entity\Address;
use CrowdValley\Bundle\ClientBundle\Entity\CVException;
use CrowdValley\Bundle\ClientBundle\Entity\CVResponse;
use Doctrine\Common\Collections\ArrayCollection;

class RaisecapitalController extends Controller
{
    /**
     * @Route("/raise-capital", name="raise_capital")
     */
    public function raiseCapitalAction(Request $request)
    {
        $currentTab = 'register';
        if ($this->get('session')->get('authenticated') == true) {
            $currentTab = $request->query->get('tab');
            if ($currentTab == '')
                $currentTab = 'aboutBusiness';
        }
        $signUpForm = $this->createForm(new SignUpType());
        $signUpForm->add('redirectUrl', 'hidden');
        $signUpForm->get('redirectUrl')->setData('raise_capital');

        $orgRealEstateForm = $this->createForm(new OrgRealEstateType());
        $orgPrivateCompanyForm = $this->createForm(new OrgPrivateCompanyType());

        $organizationChoices = array();
        if ($this->get('session')->get('authenticated') == true) {
            $cvResponse = $this->get('organization')->getOrganizations();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                $organizationList = !empty($cvResponse->objectList) ? $cvResponse->objectList : array();
                foreach ($organizationList as $organization) {
                    $organizationChoices[$organization->id] = $organization->displayName;
                }
            }
        }

        $debtOfferingForm = $this->createForm(new DebtOfferingType($organizationChoices));
        $equityOfferingForm = $this->createForm(new EquityOfferingType($organizationChoices));

        $this->params['menu_item']= 'raise_capital';
        $this->params['formSignUp']= $signUpForm->createView();
        $this->params['formRealEstate']= $orgRealEstateForm->createView();
        $this->params['formPrivateCompany']= $orgPrivateCompanyForm->createView();
        $this->params['formDebtOffering']= $debtOfferingForm->createView();
        $this->params['formEquityOffering']= $equityOfferingForm->createView();
        $this->params['current_tab']= $currentTab;
        return $this->render('AppBundle:Raisecapital:raise_capital.html.twig',$this->params);
    }

    /**
     * @Route("/my-applications", name="my_applications")
     */
    public function myApplicationsAction()
    {
        $this->params['menu_item']= 'my_applications';
        return $this->render('AppBundle:Raisecapital:my_applications.html.twig',$this->params);
    }

    /**
     * @Route("/add-organization", name="add_organization")
     */
    public function addOrganizationAction(Request $request)
    {
        $isValid = false; $data = null;
        $self = $this->get('session')->get('self');
        $tab = 'aboutBusiness';

        if ($request->isMethod('POST')) {
            $organization = new Organization();
            $address = new Address();
            $organization->address = new ArrayCollection();
            //$organization->address->add($address);
            if ($request->request->has('org_real_estate_type')) {
                // handle the first form
                $orgRealEstateForm = $this->createForm(new OrgRealEstateType(), $organization);
                $orgRealEstateForm->handleRequest($request);
                $isValid = $orgRealEstateForm->isValid();
                $data = $orgRealEstateForm->getData();
            }

            if ($request->request->has('org_private_company_type')) {
                // handle the second form
                $orgPrivateCompanyForm = $this->createForm(new OrgPrivateCompanyType(), $organization);
                $orgPrivateCompanyForm->handleRequest($request);
                $isValid = $orgPrivateCompanyForm->isValid();
                $data = $orgPrivateCompanyForm->getData();
            }
            if ($isValid) {
                $address->id = null;
                $address->building = $data->address['building'];
                $address->streetAddress = $data->address['streetAddress'];
                $address->addressLocality = $data->address['addressLocality'];
                $address->city = $data->address['city'];
                $address->region = $data->address['region'];
                $address->postalCode = $data->address['postalCode'];
                $address->country = $data->address['country'];
                $organization->address->add($address);
                $cvResponse = $this->get('organization')->createOrganization($organization);//dump($cvResponse);exit;
                if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                    $tab = 'offering';
                }
            }
        }
        return $this->redirect($this->generateUrl('raise_capital', array('tab'=> $tab)));
    }

    /**
     * @Route("/add-offering", name="add_offering")
     */
    public function addOfferingAction(Request $request)
    {
        $isValid = false; $data = null;
        $self = $this->get('session')->get('self');
        $tab = 'offering';

        if ($request->isMethod('POST')) {
            $offering = new Offering();
            $organization = new Organization();
            $cvResponse = $this->get('organization')->getOrganizations();
            $organizationChoices = array();
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                $organizationList = !empty($cvResponse->objectList) ? $cvResponse->objectList : array();
                foreach ($organizationList as $organization) {
                    $organizationChoices[$organization->id] = $organization->displayName;
                }
            }
            if ($request->request->has('debt_offering_type')) {
                // handle the first form
                $offeringDebtForm = $this->createForm(new DebtOfferingType($organizationChoices), $offering);
                $offeringDebtForm->handleRequest($request);
                $isValid = $offeringDebtForm->isValid();
                $data = $offeringDebtForm->getData();
            }

            if ($request->request->has('equity_offering_type')) {
                // handle the second form
                $offeringEquityForm = $this->createForm(new EquityOfferingType($organizationChoices), $offering);
                $offeringEquityForm->handleRequest($request);
                $isValid = $offeringEquityForm->isValid();
                $data = $offeringEquityForm->getData();
            }
            if ($isValid) {
                $cvResponse = $this->get('organization')->createOfferingForOrganization($organization, $offering);
                if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                    $tab = 'submitapplication';
                }
            }
        }
        return $this->redirect($this->generateUrl('raise_capital', array('tab'=>$tab)));
    }
}
