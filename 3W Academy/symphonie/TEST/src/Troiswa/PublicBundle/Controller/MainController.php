<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Validator\Constraints as Assert;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TroiswaPublicBundle:Main:index.html.twig');
    }

    public function troiswaAction()
    {
        return $this->render('TroiswaPublicBundle:Main:bonjour.html.twig');

    }
    public function ageAction($number)
    {
        return $this->render('TroiswaPublicBundle:Main:age.html.twig',array('mon_age'=>$number));
    }
    public function competenceAction()
    {
        $competences=array('php' => array('note'=>10, 'couleur'=>'#66cc66'),'html' => array('note'=>7, 'couleur'=>'red'),'css' => array('note'=>8, 'couleur'=>'blue'),'js' => array('note'=>9, 'couleur'=>'green'));

        return $this->render('TroiswaPublicBundle:Main:competence.html.twig',array('competences'=>$competences));

    }
    public function contactAction(Request $request)
    {
        $formcontact= $this->createFormBuilder()
                            ->add('name', 'text', array(
                                'required'=>false,
                                'constraints' => array( new Assert\NotBlank(array(
                                                            'message' => "Veuillez remplir le champ")) 
                                                ),
                                
                            ))

                            ->add('email', 'text', array(
                                'required'=>false,
                                'constraints' => array( new Assert\NotBlank(array(
                                                            'message' => "Veuillez remplir le champ")), 

                                                        new Assert\Email(array(
                                                            'message' => "'{{ value }}' n'est pas un email valide.",
                                                            'checkMX' => true,))
                                                ),
                            ))

                            ->add('phone', 'text', array(
                                'required'=>false,
                                'constraints' => array( new Assert\NotBlank(array(
                                                            'message' => "Veuillez remplir le champ")) ),
                                
                            ))

                            ->add('message','textarea', array(
                                'required'=>false,
                                'constraints' => array( new Assert\NotBlank(array(
                                                            'message' => "Veuillez remplir le champ")), 

                                                        new Assert\Length(array(
                                                            'max'        => 500,
                                                            'maxMessage' => 'Vous ne pouvez saisir 500 Caratères max',)) 
                                                ),
                            ))

                            ->add('ajouter','submit')
                            ->getForm();

        if ("POST" === $request->getMethod())
        {
            // die('POST');
            $formcontact->handleRequest($request);

            if($formcontact->isvalid())
            {
                $email=$formcontact->get('email')->getData();
                $name=$formcontact->get('name')->getData();
                $mail=\Swift_Message::newInstance()

                    -> setSubject("Formulaire de contact")
                    -> setFrom($email)
                    -> setTo("small_chinese@hotmail.com")
                    -> setBody($this -> renderView('TroiswaPublicBundle:Mail:mailcontact.html.twig', 
                            array('name' => $name) ));

                $this -> get('mailer') -> send($email);
                $session= $request->getSession();
                $session->getFlashBag()->add('info','Formulaire envoyé');
                return $this->redirect($this->generateUrl('troiswa_public_contact'));
            }
        }

        return $this->render('TroiswaPublicBundle:Mail:contact.html.twig', array('formcontact'=>$formcontact->createView()));



    }



}
