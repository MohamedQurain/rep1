<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/01/2019
 * Time: 16:15
 */

namespace VoitureBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VoitureBundle\Entity\Chauffeur;
use VoitureBundle\Form\ChauffeurType;

class ChauffeurController extends Controller
{

    public function ajouterChauffeurAction(Request $request){

        $chauffeur = new Chauffeur();
        $form = $this->createForm(ChauffeurType::class,$chauffeur);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->persist($chauffeur);
            $em->flush();
            //return $this->redirectToRoute('ListVoiture');

        }
        return $this->render('@Voiture/Chauffeur/ajouterChauffeur.html.twig',
            array("Form"=>$form->createView()));
    }

}