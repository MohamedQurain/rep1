<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/01/2019
 * Time: 18:23
 */

namespace Examm\RCBundle\Controller;


use Examm\RCBundle\Entity\Capteur;
use Examm\RCBundle\Form\CapteurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CapteurController extends Controller
{
    public function ajouterCapteurAction(Request $request){

        $capteur = new Capteur();
        $form = $this->createForm(CapteurType::class,$capteur);
        $form->handleRequest($request);





        if($form->isSubmitted()&&$form->isValid()){
            $rc=$capteur->getRCSF();

            $nb=$rc->getNbLimit();

            if($nb>0){
                $rc->setNbLimit($rc->getNbLimit()-1);
                $capteur->setRCSF($rc);
                $em=$this->getDoctrine()->getManager();
                $em->persist($capteur);
                $em->flush();

                return $this->redirectToRoute('afficherCapteurs');
            }
            else if($nb==0){

                return $this->redirectToRoute('ajouterCapteur');
            }


        }

        return $this->render('@ExammRC/Capteur/ajouterCapteur.html.twig',
            array("Form"=>$form->createView()));

    }


    public function afficherCapteursAction(Request $request){

        $em=$this->getDoctrine()->getManager();
        $reseaux= $em->getRepository("ExammRCBundle:RCSF")->findAll();


        $capteurs= $em->getRepository("ExammRCBundle:Capteur")->findAll();
        return $this->render('@ExammRC/Capteur/afficherCapteurs.html.twig',
            array("reseaux"=>$reseaux , "capteurs"=>$capteurs));
    }

}