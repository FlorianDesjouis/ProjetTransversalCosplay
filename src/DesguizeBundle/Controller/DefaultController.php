<?php

namespace DesguizeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM article ORDER BY dateCreation DESC LIMIT 2");
        $statement->execute();
        $results = $statement->fetchAll();

        return $this->render('DesguizeBundle:Default:index.html.twig', array(
            'articles' => $results,
        ));
    }

    public function cguAction()
    {
         return $this->render('DesguizeBundle:Default:cgu.html.twig');
    }

    public function contactAction()
    {
         return $this->render('DesguizeBundle:Default:contact.html.twig');
    }

    public function categorieAction()
    {
         return $this->render('DesguizeBundle:Default:categorie.html.twig');
    }
}
