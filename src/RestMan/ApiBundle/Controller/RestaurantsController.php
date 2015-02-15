<?php

namespace RestMan\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class RestaurantsController extends Controller
{
	/**
	 * @Route("all.{_format}", defaults={"_format": "html"})
	 * @Method({"GET"})
	*/
    public function getRestaurantsAction($_format)
    {
    	$restaurantRepo = $this->getDoctrine()
    		->getRepository('RestManApiBundle:Restaurant');
    	$restaurants = $restaurantRepo->findAll();

    	$serializer = $this->container->get('serializer');

    	if ($_format == 'json') {
    		return new Response($serializer->serialize($restaurants, 'json'));
    	}

    	return new Response($this->render('RestManApiBundle:Restaurants:index.html.twig',
    		array('restaurants' => $restaurants)));
    }
}
