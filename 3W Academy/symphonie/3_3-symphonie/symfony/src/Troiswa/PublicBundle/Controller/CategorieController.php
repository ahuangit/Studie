<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategorieController extends Controller
{

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('TroiswaPublicBundle:Categorie')->findAll();
        return $this->render('TroiswaPublicBundle:Categorie:show.html.twig', array('categories' => $categories));
    }

}