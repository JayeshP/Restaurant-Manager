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
     * @Route("/{restaurantId}.{_format}", name="_get_restaurant", defaults={
     *          "_format": "html"},
     *      requirements={"_format": "json|html"})
     * @Method({"GET"})
     */
    public function getRestaurantAction($restaurantId, $_format)
    {
        $restaurantRepo = $this->getDoctrine()
            ->getRepository('RestManApiBundle:Restaurant');
        $restaurant = $restaurantRepo->findOneById($restaurantId);

        if (is_null($restaurant)) {
            return $this->render('RestManApiBundle:Default:404.html.twig');
        }

        $serializer = $this->container->get('serializer');

        if ($_format == 'json') {
            return new Response($serializer->serialize($restaurant, 'json'));
        }

        return $this->render('RestManApiBundle:Restaurants:detailView.html.twig',
                    array('restaurant' => $restaurant));
    }

    /**
     * @Route("/pdf/{restaurantId}.pdf", name="_get_restaurant_pdf")
     * @Method({"GET"})
     */
    public function getRestaurantPdfAction($restaurantId, $_format)
    {
        $restaurantRepo = $this->getDoctrine()
            ->getRepository('RestManApiBundle:Restaurant');
        $restaurant = $restaurantRepo->findOneById($restaurantId);

        if (is_null($restaurant)) {
            return $this->render('RestManApiBundle:Default:404.html.twig');
        }

        $html = $this->render('RestManApiBundle:Restaurants:detailView.html.twig',
            array('restaurant' => $restaurant));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );

    }
}
