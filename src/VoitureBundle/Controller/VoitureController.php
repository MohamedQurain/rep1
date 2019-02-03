<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/01/2019
 * Time: 16:55
 */

namespace VoitureBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use VoitureBundle\Form\VoitureType;

class VoitureController extends Controller
{

    public function afficherVoituresAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $voitures= $em->getRepository("VoitureBundle:Voiture")->findAll();
        return $this->render('@Voiture/Voiture/afficherVoitures.html.twig',
            array("voitures"=>$voitures));
    }


    public function louerVoitureAction(Request $request){

        $immatricule=$request->get('immatricule');
        $em=$this->getDoctrine()->getManager();
        $voiture=$em->getRepository("VoitureBundle:Voiture")->find($immatricule);

        $form = $this->createForm(VoitureType::class,$voiture);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($voiture);
            $em->flush();
            //return $this->redirectToRoute('ListVoiture');
            return new Response('Réservation effectuée');

        }

        return $this->render('@Voiture/Voiture/louerVoiture.html.twig',
            array("Form"=>$form->createView(),"voiture"=>$voiture));

    }

}