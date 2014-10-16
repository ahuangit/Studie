<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TroiswaPublicBundle:Main:index.html.twig');
    }

    public function competencesAction()
    {
        $competences = array(
            'Php' => array('note' =>10, 'couleur' => '#66CC66'),
            'Html' => array('note' =>9, 'couleur' => '#222222'),
            'Css' => array('note' =>8, 'couleur' => '#ffec03'),
            'Js' => array('note' =>7, 'couleur' => '#c0392b'),
        );
        return $this->render('TroiswaPublicBundle:Main:competences.html.twig', array('competences' => $competences));
    }
}