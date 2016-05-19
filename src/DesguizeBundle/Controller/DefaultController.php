<?php

namespace DesguizeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DesguizeBundle:Default:index.html.twig');
    }
}
