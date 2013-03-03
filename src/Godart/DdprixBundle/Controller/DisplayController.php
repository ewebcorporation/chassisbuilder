<?php

namespace Godart\DdprixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Godart\ChassisBundle\Entity\Chassis;
use Godart\DdprixBundle\Entity\Ddprix;

class DisplayController extends Controller
{
   
  //**********************************************************
 public function DisplaylisteDdprixAction(){
     
       // commencons par obtenir l'ensemble des demandes de prix
       $em = $this->getDoctrine()->getManager(); //obtention du manager
       $ddprixrepository = $em->getRepository('GodartDdprixBundle:Ddprix');
       //maintenant,on prend l'ensemble des ddprix existants
       $liste_ddprix = $ddprixrepository->findAll();
       return $this->render('GodartDdprixBundle:Default:DisplaylisteDdprix.html.twig',array('liste_ddprix'=>$liste_ddprix));
     
     
     
     
     
     
     
                                        }
    
    
    
    
   public function testAction($name){ 
       
    return $this->render('GodartDdprixBundle:Default:index.html.twig', array('name' => $name));
}


}
