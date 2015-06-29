<?php
namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
// use Bmw\MainBundle\Form\UserType;
// use Bmw\MainBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController 
{
    /**
     * @Route("/register")
     * @Template()
     */
   
    public function registerAction(Request $request)
    {
        
		$user = new User();
		
		
		
    	$form = $this->createForm(new UserType(), $user);
		$form->handleRequest($request);
		
		//trzeba dorobić walidacje
		if ($form->isValid()) {
   			 $user->setRole(1); //rola użytkownika
    		 $user->setItemStatus(1);	//użytkownik aktywny
    		 
   			 $em = $this->getDoctrine()->getManager();
   			 $em->persist($user);
   			 $em->flush();

         $request->getSession()->getFlashBag()
         ->add('success', 'Konto zostało poprawnie utworzne! Możesz teraz się zalogować');
			 
   			 // return $this->redirect($this->generateUrl('user'), 301);
			 
		}
		
  if ($request -> getMethod() == 'POST') {		
        return $this->render('Acme:DemoBundle:afterregister.html.twig', array(
        'form' => $form->createView(),
        'title' => 'Rejestracja'
      ));
        
		}
    return $this->render('Acme:DemoBundle:register.html.twig', array(
        'form' => $form->createView(),
        'title' => 'Rejestracja'
      ));
    }

}