<?php

namespace RestMan\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class RestaurantsController extends Controller
{
	/**
	 * @Route("/")
	 * @Method({"GET"})
	*/
    public function getRestaurantsAction()
    {
    	$response = $this->get('request');
        return new Response(json_encode(array('Tasty Bytes', 'Dominos'), true));
    }
}
