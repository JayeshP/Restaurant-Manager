<?php

namespace RestMan\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RestManApiBundle:Default:index.html.twig');
    }
}
