<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Troiswa\PublicBundle\Entity\Acteur;

class ActeurController extends Controller
{

/**
    acteurs.html.twig
*/
    public function acteursAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acteurs = $em->getRepository('TroiswaPublicBundle:Acteur')->findAll();

        return $this->render('TroiswaPublicBundle:Acteur:acteurs.html.twig', array('acteurs' => $acteurs));
    }

/**
    acteur.html.twig
*/

    public function acteurAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $acteur = $em->getRepository('TroiswaPublicBundle:Acteur')->find($id);

        return $this->render('TroiswaPublicBundle:Acteur:acteur.html.twig', array('acteur' => $acteur));
    }

/**
    ajouter.html.twig
*/



    public function ajouterAction(Request $request)
    {


        $acteur = new Acteur();
        $form = $this->createFormBuilder($acteur)
            ->add('prenom', 'text', array(
                'required'  => false))


            ->add('nom', 'text', array(
                'required'  => false))

            //->add('dateNaissance')

            ->add('dateNaissance', 'date', array(
                'widget'    => 'single_text',
                'data'      => new \DateTime('now'),
                'years'     => range(1900,Date('Y')),
                'required'  => false
                ))

            ->add('sexe', 'choice', array(
                'choices'   => array('0' => 'Femme', 
                                     '1' => 'Homme'),

                'expanded'  => true,
                'multiple'  => false, ))

            ->add('nationalite', 'text', array(
                'required'  => false))

            ->add('biographie', 'text', array(
                'required'  => false))

            ->add('ajouter', 'submit')
            ->getForm();

        if ("POST" == $request->getMethod())
        {
            $form->bind($request);
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();

                $em->persist($acteur);
                $em->flush();

                return $this->redirect($this->generateUrl('troiswa_public__admin_acteur_ajouter'));
            }
        }

        return $this->render('TroiswaPublicBundle:Acteur:ajouter.html.twig', array('form' => $form->createView()));
    }

}