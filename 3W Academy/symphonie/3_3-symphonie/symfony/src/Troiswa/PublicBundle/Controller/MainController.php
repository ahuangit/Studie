<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Validator\Constraints as Assert;

class MainController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $nbFilmsByCategories = $em->getRepository('TroiswaPublicBundle:Film')->nbFilmByCategorie();
        $allFilmsByCategorie = $em->getRepository('TroiswaPublicBundle:Film')->getNbFilmByCategorie();
        //die(var_dump($nbFilmsByCategories));
        return $this->render('TroiswaPublicBundle:Main:index.html.twig', array('allFilmsByCategorie' => $allFilmsByCategorie));
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

    public function contactAction(Request $request)
    {
        $formContact = $this->createFormBuilder()
                    ->add('name', null,
                        array(
                            'constraints' => array(
                                new Assert\NotBlank(array('message' => 'Veuillez rentrer'))
                                )
                            )
                        )
                    ->add('email', null,
                        array(
                            'constraints' => array(
                                new Assert\Email(),
                                new Assert\NotBlank()
                                )
                            )
                        )
                    ->add('phone', null,
                        array('constraints' =>
                            array(
                                new Assert\Regex(array('pattern' => '/^0[1-68]([-. ]?[0-9]{2}){4}/'))
                                )
                            )
                        )
                    ->add('message', 'textarea',
                        array(
                            'constraints' => array(
                                new Assert\NotBlank(),
                                new Assert\Length(array(
                                    'max'        => 500,
                                    'maxMessage' => 'Votre message ne peut pas être plus long que {{ limit }} caractères',
                                    )
                                )
                                )
                            )
                        )
                    ->add('ajouter', 'submit')
                    ->getForm();

        $formContact->handleRequest($request);
        if ($formContact->isValid())
        {
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello')
                ->setFrom($formContact->get('email')->getData())
                ->setTo('ludo.verrecchia@gmail.com')
                ->setBody($this->renderView('TroiswaPublicBundle:Mail:contact.html.twig',
                    array(
                        'name' => $formContact->get('name')->getData(),
                        'message' => $formContact->get('message')->getData()
                        ))
                );

            $this->get('mailer')->send($message);

            $sessions = $request->getSession();
            
            $sessions->getFlashBag()->add(
                'info',
                'Votre mail a bien été envoyé'
            );

            return $this->redirect($this->generateUrl('troiswa_public_contact'));
        }

        return $this->render('TroiswaPublicBundle:Main:contact.html.twig',
            array('formContact' => $formContact->createView()));
    }
}