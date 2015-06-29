<?php

namespace Acme\DemoBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class RegController extends Controller
{
    public function regAction()
    {
    	$category = 'Most Popular';
		$repository = $this->getDoctrine()->getRepository('AcmeDemoBundle:Rodzice');		
		// $movie = $repository->findImie(6.99);
		// $repository = $this->getDoctrine()->getRepository('BmwMainBundle:Review');
		
		  
  
	      $stmt = $this->getDoctrine()->getManager()  
	                   ->getConnection()  
	                   ->prepare(
	                   	'SELECT * FROM rodzice');  
	      
	      $stmt->execute();  
	      $mostPopular =  $stmt->fetchAll(); 
    	exit(\Doctrine\Common\Util\Debug::dump($mostPopular));	
      return new Response('<html><body>Hello '."".'!</body></html>');
    }
}
