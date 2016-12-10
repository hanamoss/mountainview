<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Util\Util;
use AppBundle\Form\EditProfileType;
use CrowdValley\Bundle\ClientBundle\Entity\User;
use CrowdValley\Bundle\ClientBundle\Entity\CVException;
use CrowdValley\Bundle\ClientBundle\Entity\CVResponse;

class ProfileController extends Controller
{
    /**
     * @Route("/my-profile", name="my_profile")
     */
    public function myProfileAction()
    {
        if ($this->get('session')->get('authenticated') == false) {
        
			return $this->redirect($this->generateUrl('homepage', array('login_required' => true)));								        
        }				
		
		$self = '';
		$documents = '';
		$cvResponse = $this->get('self')->getSelf();
		
		if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

			$self = $cvResponse->object;
			$this->get('session')->set('self', $self);	
			
			$cvResponse = $this->get('self')->getDocuments();
			
			if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

				$documents = $cvResponse->objectList;
			}

		}
		else {
		
			$error = $cvResponse->exception->userMessage;
			$this->get('session')->set('authenticated', false);	
			
			return $this->redirect($this->generateUrl('homepage'));								
		}
		
		$this->params['self'] = $self;
		$this->params['documents'] = $documents;
        $this->params['menu_item'] = 'my-profile';
        return $this->render('AppBundle:Profile:my_profile.html.twig',$this->params);
    }

    /**
     * @Route("/edit-profile", name="edit_profile")
     */
    public function editProfileAction(Request $request)
    {		
		$form = $this->createForm(new EditProfileType());

        if ($request->isMethod('POST')) {
        
            $form->bind($request);
            $editProfileData = $form->getData();
			
			$self = $this->get('session')->get('self');				
			
			$self->givenName = $editProfileData['givenName'];				
			$self->familyName = $editProfileData['familyName'];				
			$self->phone1 = $editProfileData['phone1'];		
			
			$this->get('self')->save($self);
        }		
		
		
		$self = '';
		$cvResponse = $this->get('self')->getSelf();
		
		if ($cvResponse->outcome == CVResponse::RESPONSE_OUTCOME_SUCCESS) {

			$self = $cvResponse->object;
			$this->get('session')->set('self', $self);				
		}
		else {
		
			$error = $cvResponse->exception->userMessage;
			$this->get('session')->set('authenticated', false);	
			
			return $this->redirect($this->generateUrl('homepage'));								
		}
		
		$this->params['self'] = $self;
		$this->params['form'] = $form->createView();
		$this->params['menu_item']= 'edit-profile';
        return $this->render('AppBundle:Profile:edit_profile.html.twig',$this->params);
    }

    /**
     * @Route("/change-password", name="change_password")
     */
    public function changePasswordAction()
    {
        $this->params['menu_item']= 'change-password';
        return $this->render('AppBundle:Profile:change_password.html.twig',$this->params);
    }

    /**
     * @Route("/change-email", name="change_email")
     */
    public function changeEmailAction()
    {
        $this->params['menu_item']= 'change-email';
        return $this->render('AppBundle:Profile:change_email.html.twig',$this->params);
    }

    /**
     * @Route("/my-investments", name="my_investments")
     */
    public function myInvestmentsAction()
    {
        $this->params['menu_item']= 'my-investments';
        return $this->render('AppBundle:Profile:my_investments.html.twig',$this->params);
    }
    
    /**
     * @Route("/my-wallet", name="my_wallet")
     */
    public function myWalletAction()
    {
        //$form = $this->createForm(new SignInType());
                
        $this->params['authenticated'] = $this->get('session')->get('authenticated');
        //$this->params['form'] = $form->createView();
        $this->params['signin_redirect'] = 'my_wallet';
        $this->params['menu_item']= 'my-wallet';
        return $this->render('AppBundle:Profile:my_wallet.html.twig',$this->params);
    }


}
