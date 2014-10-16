<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilmController extends Controller
{

    public function filmsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $films = $em->getRepository('TroiswaPublicBundle:Film')->findAll();

        return $this->render('TroiswaPublicBundle:Film:films.html.twig', array('films' => $films));
    }

    public function filmAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $film = $em->getRepository('TroiswaPublicBundle:Film')->find($id);

        return $this->render('TroiswaPublicBundle:Film:film.html.twig', array('film' => $film));
    }

}