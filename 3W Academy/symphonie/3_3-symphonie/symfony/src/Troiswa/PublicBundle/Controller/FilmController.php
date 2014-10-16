<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Troiswa\PublicBundle\Entity\Film;
use Troiswa\PublicBundle\Form\FilmType;

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

    public function ajouterAction(Request $request)
    {
        $film = new Film();

        $form = $this->createForm(new FilmType(), $film)
            ->add('ajouter', 'submit');

        $form->handleRequest($request);

        if ($form->isValid())
        {

            $em = $this->getDoctrine()->getManager();

            $em->persist($film);
            $em->flush();
            $sessions = $request->getSession();
            
            $sessions->getFlashBag()->add(
                'info',
                'Un film a bien été ajouté'
            );

            return $this->redirect($this->generateUrl('troiswa_public__admin_film_ajouter'));
        }

        return $this->render('TroiswaPublicBundle:Film:ajouter.html.twig', array('form' => $form->createView()));
    }

}