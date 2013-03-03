<?php

namespace Godart\DdprixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Godart\ChassisBundle\Entity\Chassis;
use Godart\DdprixBundle\Entity\Ddprix;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GodartDdprixBundle:Default:index.html.twig', array('name' => $name));
    }

    
     public function testAction()
    {
        $em= $this->getDoctrine()->getManager();
        $ddprix =  new Ddprix();
        
        $chassis1 = new Chassis();
        $chassis2 = new Chassis();
        $chassis1->setDesignation('chassis lie22');
        $chassis2->setDesignation('chassis lie23');
        
        $chassis1->setDdprix($ddprix);
        $chassis2->setDdprix($ddprix);
        $em->persist($ddprix);
        $em->persist($chassis1);
        $em->persist($chassis2);
        $em->flush();
        
         
        return $this->render('GodartDdprixBundle:Default:index.html.twig', array('name' => $ddprix->getDesignation()));
    
    
    
    }
        public function DisplayallchassisAction($id){
        // on affiche tout les modéles de chassis.
        //$id contient le numéro de la demande de prix.car on devra la transmettre au sous routine
        //on va également prendre la liste des chassis correspondant.
        $em = $this->getDoctrine()->getManager();
        $chassisREP = $em->getRepository('GodartChassisBundle:Chassis');
        // 
        $liste_chassis = $chassisREP->findByTemplate(TRUE);// on prend le ddprix

         
        return $this->render('GodartDdprixBundle:Default:Displayallchassis.html.twig', array('id' => $id ,'liste_chassis' => $liste_chassis));
        }
    
    
    
    
    
    
    
    
    
    public function DisplayDdprixAction($id){
        // ici on retourne la vue avec la ddprix complete
        $em = $this->getDoctrine()->getManager();
        $ddprixREP = $em->getRepository('GodartDdprixBundle:Ddprix');
        // 
        $ddprix = $ddprixREP->find($id);// on prend le ddprix
         $liste_chassis = $ddprix->getChassis();     // on prend la liste des chassis associés
         
        return $this->render('GodartDdprixBundle:Default:DisplayDdprix.html.twig', array('ddprix' => $ddprix,'listechassis' => $liste_chassis));
                                    }
                                            
        public function addChassistoDdprixAction($id,$idchassis){
        // on lie le chassis avec le Ddprix.
        //$id : numero de la ddprix
        //$chassis : numero du chassis theme
        //On va commencer par prendre le correspondant
         // on le copie dans un nouvelle objet chassis
        $em = $this->getDoctrine()->getManager();
        $chassisREP = $em->getRepository('GodartChassisBundle:Chassis');
        $chassistemplate = $chassisREP->find($idchassis);
        $chassis = new Chassis(); // on peut creer l'objet chassis
        
        $chassis = clone $chassistemplate; //On le clone avec la template
        $chassis->setTemplate(false); // Ce n'est pas une template donc on le false
        // ici on n'a un nouvel objet chassis
        //occupons nous mintenant de la ddprix
        
        
        $DdprixREP = $em->getRepository('GodartDdprixBundle:Ddprix');
        $Ddprix = $DdprixREP->find($id); // on prend le Ddprix
       
        $em->persist($chassis); // on persiste notre nouveau chassis
        $chassis->setDdprix($Ddprix);
        
        
        
        
        $em->flush(); // on sauve tout cela dans la base de donné.
        
        // Ensuite on retourne bien gentiment dans la vue de la ddprix selectionnee
        return $this->render('GodartDdprixBundle:Default:voir.html.twig', array('id' => $id));
                                          
                                                
        }                    
                                            
                                            
                                            
                                            
                                            
    public function voirAction($id){

        return $this->render('GodartDdprixBundle:Default:voir.html.twig', array('id' => $id));
        
        
                                            }
}
