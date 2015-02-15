<?php

namespace RestMan\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/restaurants")
 */
class RestaurantsController extends Controller
{
	/**
	 * @Route(".{_format}", name="_get_restaurants")
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

    	return $this->render('RestManApiBundle:Restaurants:index.html.twig',
    		array('restaurants' => $restaurants));
    }

    /**
     * @Route("/{restaurantId}.{_format}")
     * @Method({"GET"})
     */
    public function getRestaurantAction($restaurantId, $_format)
    {
        $restaurantRepo = $this->getDoctrine()
            ->getRepository('RestManApiBundle:Restaurant');
        $restaurant = $restaurantRepo->findOneById($restaurantId);

        $serializer = $this->container->get('serializer');

        if ($_format == 'json') {
            return new Response($serializer->serialize($restaurant, 'json'));
        }

        return $this->render('RestManApiBundle:Restaurants:detailView.html.twig',
                    array('restaurant' => $restaurant));
    }
}
