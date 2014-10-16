<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Troiswa\PublicBundle\Entity\Acteur;
use Troiswa\PublicBundle\Form\ActeurType;

class ActeurController extends Controller
{

    public function acteursAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acteurs = $em->getRepository('TroiswaPublicBundle:Acteur')->findAll();

        return $this->render('TroiswaPublicBundle:Acteur:acteurs.html.twig', array('acteurs' => $acteurs));
    }

    public function acteurAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $acteur = $em->getRepository('TroiswaPublicBundle:Acteur')->find($id);

        return $this->render('TroiswaPublicBundle:Acteur:acteur.html.twig', array('acteur' => $acteur));
    }

    public function ajouterAction(Request $request)
    {
        $acteur = new Acteur();

        $form = $this->createForm(new ActeurType(), $acteur)
            ->add('ajouter', 'submit');

        if ("POST" === $request->getMethod())
        {
            $form->bind($request); // Ancienne façon
            if ($form->isValid())
            {
                // upload
                $acteur->upload();

                $em = $this->getDoctrine()->getManager();

                $em->persist($acteur);
                $em->flush();
                $sessions = $request->getSession();
                
                $sessions->getFlashBag()->add(
                    'info',
                    'Un acteur a bien été ajouté'
                );

                return $this->redirect($this->generateUrl('troiswa_public__admin_acteur_ajouter'));
            }
        }

        return $this->render('TroiswaPublicBundle:Acteur:ajouter.html.twig', array('form' => $form->createView()));
    }

    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $acteur = $em->getRepository('TroiswaPublicBundle:Acteur')->find($id);
        $form = $this->createFormBuilder($acteur)
            ->add('prenom')
            ->add('nom')
            ->add('dateNaissance', 'date', array(
                'widget' => 'single_text',
                'data' => new \DateTime('now')
                ))
            ->add('sexe', 'choice', array(
                'choices' => array(0 => 'femme', 1 => 'homme'),
                'expanded' => true,
                'data' => 0)
                )
            ->add('nationalite')
            ->add('biographie')
            ->add('ajouter', 'submit')
            ->add('fichier', 'file')
            ->getForm();


            $form->handleRequest($request);
            if ($form->isValid())
            {
                // upload
                $acteur->upload();
                
                $em->persist($acteur);
                $em->flush();
                $sessions = $request->getSession();
                
                $sessions->getFlashBag()->add(
                    'info',
                    'L\'acteur a bien été mis à jour'
                );

                return $this->redirect($this->generateUrl('troiswa_public__admin_acteur_update', array('id' => $acteur->getId())));
            }

        return $this->render('TroiswaPublicBundle:Acteur:update.html.twig', array('form' => $form->createView()));
    }

}