<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Util\Util;
use AppBundle\Form\SignInType;
use AppBundle\Form\SignUpType;
use AppBundle\Form\UserType;
use CrowdValley\Bundle\ClientBundle\Entity\User;
use CrowdValley\Bundle\ClientBundle\Entity\CVException;
use CrowdValley\Bundle\ClientBundle\Entity\CVResponse;

class RegistrationController extends Controller
{
    /**
     * @Route("/signup", name="signup")
     */
    public function signupAction()
    {
        $self = !empty($this->get('session')->get('self')) ? json_decode(json_encode($this->get('session')->get('self')), true) : array();
        $currentTab = $this->get('session')->get('tab');
        if ($this->get('session')->get('authenticated') == true) {
            $currentTab = 'kyc';
        }
        $signUpForm = $this->createForm(new SignUpType());
        $signUpForm->add('redirectUrl', 'hidden');
        $signUpForm->get('redirectUrl')->setData('signup');
        $userTypeForm = $this->createForm(new UserType($self));
        $this->params['menu_item']= 'signup';
        $this->params['formSignUp']= $signUpForm->createView();
        $this->params['formUser']= $userTypeForm->createView();
        $this->params['current_tab']= $currentTab;
        return $this->render('AppBundle:Registration:signup.html.twig',$this->params);
    }
    
    /**
     * @Route("/email-verification", name="email_verification")
     */
    public function emailVerificationAction(Request $request)
    {
		$this->params['resent_email'] = $request->get('resent_email');
        $this->params['menu_item'] = 'email_verification';
        return $this->render('AppBundle:Registration:email_verification.html.twig',$this->params);
    }    
    
    /**
     * @Route("/_resend-verification-email", name="resend_verification_email")
     */
    public function resendVerificationEmailAction(Request $request)
    {
        if ($request->isMethod('POST')) {
			
			$cvResponse = $this->get('self')->resendVerificationEmail();				
        }
        
	    return $this->redirect($this->generateUrl('email_verification', array(
	    	'resent_email' => true
	    )));						        
    }        
    
    /**
     * @Route("/complete-registration", name="complete_registration")
     */
    public function completeRegistrationAction()
    {
        $this->params['menu_item']= 'complete-registration';
        return $this->render('AppBundle:Registration:complete_registration.html.twig',$this->params);
    }    
    
    /**
     * @Route("/gbgroup", name="gbgroup")
     */
    public function gbgroupAction()
    {
        $this->params['menu_item']= 'gbgroup';
        return $this->render('AppBundle:Registration:gbgroup.html.twig',$this->params);
    }

    /**
     * @Route("/contego", name="contego")
     */
    public function contegoAction()
    {
        $this->params['menu_item']= 'contego';
        return $this->render('AppBundle:Registration:contego.html.twig',$this->params);
    }

    /**
     * @Route("/register", name="app_sign_up")
     */
    public function registerAction(Request $request)
    {
        $form = $this->createForm(new SignUpType());
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $signUpData = $form->getData();
            $postData = $request->request->all();
            $redirectPath = $postData['sign_up_type']['redirectUrl'];
            $additionalData = array('given_name'=> $signUpData['given_name'], 'family_name'=> $signUpData['family_name']);
            $cvResponse = $this->get('user')->createUser($signUpData['email'], $signUpData['password'], $this->generateUrl('app_verify_email', array(), true), $additionalData);

            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                $cvResponse = $this->get('authenticate')->login($signUpData['email'], $signUpData['password']);
            } else { // Error
                $error = 'Internal server error';
                if ($cvResponse->exception->code == 20009) {
                    $error = 'This account already exists. Please log in or sign up with a different email address.';
                }
                $response = new Response(json_encode(array('success' => false, 'error' => $error)));
                return $response;
            }
            if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) { // Login success
                // set authenticated
                $this->get('session')->set('authenticated', true);
                $cvResponse = $this->get('self')->getSelf();
                if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
                    $self = $cvResponse->object;
                    $this->get('session')->set('self', $self);
                    $this->get('session')->set('tab', 'kyc');
                }
                $route = $redirectPath;
                $response = new Response(json_encode(array('success' => true, 'url' => $this->generateUrl($route))));
                return $response;
            } else if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_EXCEPTION) {
                $error = $cvResponse->exception->userMessage;
                $response = new Response(json_encode(array('success' => false, 'error' => $error)));
                return $response;
            }
        } else {
            $response = new Response(json_encode(array('success' => false, 'error' => 'Internal server error')));
            return $response;
        }
    }

    /**
     * @Route("/verify-email", name="app_verify_email")
     */
    public function verifyEmailAction(Request $request)
    {
        $userId = $request->get('user_id');
        $secret = $request->get('secret');
        $cvResponse = $this->get('public')->verifyEmail($userId, $secret);
        $this->get('session')->getFlashBag()->add('info', 'Your email has been successfully verified.');
        return $this->redirect($this->generateUrl('homepage'));
    }

    /**
     * Checking user kyc status
     * @Route("/kyc-check", name="kyc_check")
     */
    public function KycCheckAction(Request $request)
    {
        $self = !empty($this->get('session')->get('self')) ? $this->get('session')->get('self') : array();
        $form = $this->createForm(new UserType($self));
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $userData = $form->getData();
            //$this->get('self')->save($userData);
            // This User data should pass to {network}/self/gbgIdVerify service
        }
    }
}
