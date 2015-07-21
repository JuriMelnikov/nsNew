<?php

namespace NsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NsBundle:Default:index.html.twig', array());
    }
}
