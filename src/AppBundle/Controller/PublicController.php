<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Util\Util;
use AppBundle\Form\SignInType;
use AppBundle\Form\SignUpType;
use CrowdValley\Bundle\ClientBundle\Entity\User;
use CrowdValley\Bundle\ClientBundle\Entity\Offering;
use CrowdValley\Bundle\ClientBundle\Entity\CVException;
use CrowdValley\Bundle\ClientBundle\Entity\CVResponse;

class PublicController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {        
		$self = $this->get('session')->get('self');				
		$loginRequired = $request->query->get('login_required');				
        $referrer = $request->query->get('referrer');

        if (!empty($referrer)) {
            $this->get('session')->set('login_referrer', urldecode($referrer));
        }
        else {
			$this->get('session')->set('login_referrer', 'homepage');      
        }
        
        $featuredOfferings = [];
        
        $cvResponse = $this->get('public')->getFeaturedOfferings();
        
        if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
        
        	$featuredOfferings = $cvResponse->objectList;
        }
		
        $signupForm = $this->createForm(new SignUpType()); 
        
        $this->params['self'] = $self;
        $this->params['dividends_received'] = $this->get('session')->get('dividends_received');		
        $this->params['login_required'] = $loginRequired;
        $this->params['signup_form'] = $signupForm->createView();
        $this->params['featured_offerings'] = $featuredOfferings;
        $this->params['menu_item']= 'homepage';
        return $this->render('AppBundle:Public:index.html.twig',$this->params);
    }

    /**
     * @Route("/_signup", name="process_sign_up")
     */
    public function processSignUpAction(Request $request)
    {        		
        if ($request->isMethod('POST')) {
	        $form = $this->createForm(new SignUpType());
        
            $form->bind($request);
            $signUpData = $form->getData();
			
			$cvResponse = $this->get('user')->createUser($signUpData['email'], $signUpData['password'], $this->generateUrl('email_verification'));
			
			if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
        		$this->get('session')->set('authenticated', true);	
        		
        		return $this->redirect($this->generateUrl('email_verification'));			
			}
        	else {
				$error = $cvResponse->exception->userMessage;
        		$this->get('session')->set('authenticated', false);	
				
	        	return $this->redirect($this->generateUrl('homepage'));						
			}						
        } else {
        
	        return $this->redirect($this->generateUrl('homepage'));						        
        }
    }

    /**
     * @Route("/_signin", name="sign_in")
     */
    public function signInAction(Request $request)
    {        
        $form = $this->createForm(new SignInType());
		$error = '';
		$self = '';
        $this->get('session')->set('dividends_received', '0');		
		$authenticated = false;
		
        if ($request->isMethod('POST')) {
            $form->bind($request);
            $signInData = $form->getData();

			$referrer = $signInData['redirect'];
	        if (empty($referrer)) {
				$referrer = 'homepage'; 			
			}
			
			$cvResponse = $this->get('authenticate')->login($signInData['email'], $signInData['password']);
						
			if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
        		$this->get('session')->set('authenticated', true);
        		
				$cvResponse = $this->get('self')->getSelf();
	
				if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

					$self = $cvResponse->object;
					$this->get('session')->set('self', $self);	
					
					$cvResponse = $this->get('self')->getSelfStats();
					
					if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {
					
						$this->get('session')->set('dividends_received', $cvResponse->object->data['total_dividends_received']);
					}
				}        		
			}
        	else if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_EXCEPTION) {
				$error = $cvResponse->exception->userMessage;
			}
						
	        return $this->redirect($this->generateUrl($referrer));		
        }

		return $this->render('AppBundle:Public:signin.html.twig', array(
			'form' => $form->createView(), 
			'error' => $error
		)); 
    }
    
    /**
     * @Route("/_logout", name="logout")
     */
    public function logoutAction(Request $request)
    {        
        $this->get('session')->set('authenticated', false);				
		
	    return $this->redirect($this->generateUrl('homepage'));		
    }    

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        $this->params['menu_item']= 'about';
        return $this->render('AppBundle:Public:about.html.twig',$this->params);
    }
    
    /**
     * @Route("/contact", name="contact")
     */
    public function contactUsAction()
    {
        $this->params['menu_item']= 'contact';
        return $this->render('AppBundle:Public:contact.html.twig',$this->params);
    }

    /**
     * @Route("/terms", name="terms")
     */
    public function termsAction()
    {
        $this->params['menu_item']= 'terms';
        return $this->render('AppBundle:Public:terms.html.twig',$this->params);
    }

    /**
     * @Route("/privacy", name="privacy")
     */
    public function privacyAction()
    {
        $this->params['menu_item']= 'privacy';
        return $this->render('AppBundle:Public:privacy.html.twig',$this->params);
    }

    /**
     * @Route("/forgot-password", name="forgot_pwd")
     */
    public function forgotPasswordAction()
    {
        $this->params['menu_item']= 'forgot_pwd';
        return $this->render('AppBundle:Public:forgot_password.html.twig',$this->params);
    }

    /**
     * @Route("/reset-password", name="reset_pwd")
     */
    public function resetPasswordAction()
    {
        $this->params['menu_item']= 'reset_pwd';
        return $this->render('AppBundle:Public:reset_password.html.twig',$this->params);
    }

    /**
     * @Route("/repayment", name="repayment")
     */
    public function repaymentAction()
    {
        $this->params['menu_item']= 'forgot_pwd';
        return $this->render('AppBundle:Public:repayment.html.twig',$this->params);
    }

      /**
     * @Route("/comofunciona", name="comofunciona")
     */
    public function comoAction()
    {
        $this->params['menu_item']= 'comofunciona';
        return $this->render('AppBundle:Public:comofunciona.html.twig',$this->params);
    }

    /**
     * @Route("/propiedades", name="propiedades")
     */
    public function propiedadesAction()
    {
        $this->params['menu_item']= 'propiedades';
        return $this->render('AppBundle:Public:cpropiedades.html.twig',$this->params);
    }


}
