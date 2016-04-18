<?php

namespace CosplayBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CosplayBlogBundle:Default:index.html.twig');
    }
}
