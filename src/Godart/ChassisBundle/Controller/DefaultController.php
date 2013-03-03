<?php

namespace Godart\ChassisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Godart\ChassisBundle\Entity\Chassis;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GodartChassisBundle:Default:index.html.twig', array('name' => $name));
    }

        public function ListerChassisAction()
        {
       
   // on liste ici l'ensemble des chassis existant.créons une liste temporaire.Nous la modifierons par la suite
        $notification = false;
        $notificationtext ="";
        $chassisrepository = $this->getDoctrine()->getManager()->getRepository('GodartChassisBundle:Chassis');
        //$listechassis = $chassisrepository->findByTemplate('true');
        $listechassis = $chassisrepository->findAll();
            
        return $this->render('GodartChassisBundle:Default:Displaylistechassis.html.twig', array('liste_chassis' => $listechassis,'notification'=>$notification,'notificationtext'=>$notificationtext));
            }
        
            
   public function DisplaylisteChassisAction($header="default")
        {
       
   // on liste ici l'ensemble des chassis existant.créons une liste temporaire.Nous la modifierons par la suite
        $notification = false;
        $notificationtext ="";
        $chassisrepository = $this->getDoctrine()->getManager()->getRepository('GodartChassisBundle:Chassis');
        //$listechassis = $chassisrepository->findByTemplate('true');
        $listechassis = $chassisrepository->findAll();
            
        return $this->render('GodartChassisBundle:Default:Displaylistechassis.html.twig', array('liste_chassis' => $listechassis,'notification'=>$notification,'notificationtext'=>$notificationtext));
            }
                                        
          public function DisplaylisteChassisaddAction()
        {
       
             
            $chassis = new Chassis(); //on creer un nouveau chassis
            $chassis->setTemplate(true); // C'es une template
             $em = $this->getDoctrine()->getManager(); //on appelle l'entity manager
             $em->persist($chassis); // on le persiste        
             $em->flush(); // on le sauvegarde en bdd
            
             //on va maintenant creer une notification
             $notification = true;
             $notificationtext = "un nouveau chassis vient d'etre ajouté";
             return $this->forward('GodartChassisBundle:Default:DisplayChassis',array('id' => $chassis->getId(),'header'=>'Modifiction du nouveau chassis'));
             // on forward vers DisplayChassisAction
             
            
        }
         
         
         
         
         
         //*****************************************************************************************************************
         
         public function DisplayChassisAction($id,$backpath="default",$header="default")
                {
                // a priori on le met en false
                $notification = false;
                $notificationtext = "";
                $backto = FALSE; // il faut mettre cette indication a true lorsque l'on veut revenir a un autre controlleur
                
                // Premiere chose, on prend le manager puis le repository
                $em = $this->getDoctrine()->getManager();
                $chassisrepository = $em->getRepository('GodartChassisBundle:Chassis');
                $chassis = $chassisrepository->find($id);
                if ($chassis === null){
                                        throw $this->createNotFoundException('le chassis N°'.$id.' est inexistant :::');
                                      }
                 //On vient de regarder si on avait pas de soucis avec l'id
                                        
                
                                      
                                      
                                      
                                      
                 // on regarde si on a une POST, si oui , c'est que le update est enclenché.
                 // on update le chassis
                 $request = $this->get('request');
                 if ($request->getMethod() == 'POST'){
                 
                                    $chassis->setCommentaire($request->request->get('commentaire'));
                                    $chassis->setB64($request->request->get('b64'));
                                    $chassis->setTemplate($request->request->get('template'));
                                    $chassis->setDesignation($request->request->get('designation'));
                                    $chassis->setMatiere($request->request->get('matiere'));
                                    $chassis->setCouleurint($request->request->get('couleurint'));
                                    $chassis->setCouleurext($request->request->get('couleurext'));
                                    $chassis->setSeuil($request->request->get('seuil'));
                                    $chassis->setVitrage($request->request->get('vitrage'));
                                    $chassis->setRainure($request->request->get('rainure'));
                                    $chassis->setEssence($request->request->get('essence'));
                                    $chassis->setInterface($request->request->get('interface'));
                                    $chassis->setLasure($request->request->get('lasure'));
                                    $em->flush();
                                    $notification = true;
                                    $notificationtext = "le chassis vient d'être mis a jour!";
                                                
                                    
                                                }                         
                   
                                                
               
                                        
                   // On retourne le template avec les bonne valeurs              
               return $this->render('GodartChassisBundle:Default:Displaychassis.html.twig',array('chassis'=>$chassis,'backpath'=>$backpath,'header'=>$header,'notification'=>$notification,'notificationtext'=>$notificationtext));    
                     
                                        
                                        
                }  
             
            
            //**********************************************************************************
            
             public function DisplayChassisEraseAction($id,$backpath="default"){
                 //on prend l'id du chassis
             $em = $this->getDoctrine()->getManager();
             $chassisrepository = $em->getRepository('GodartChassisBundle:Chassis');
             $chassis = $chassisrepository->find($id);
             $em->remove($chassis);
             $em->flush();
             // on l'article est supprimer, maintenant, on vas forwarder sur le listing template chassis par defauts
              if ($backpath == "default"){
                                           return $this->forward('GodartChassisBundle:Default:DisplaylisteChassis');
                                            }          
                            
                                           else {
                                           throw $this->createNotFoundException('Pas de chemin trouvé aprés le DisplayChassisEraseAction ');
                                           } 
                 
                 
                 
             }
                
                
            //*************************************************************************************
            
            
            
            
        public function ajouterAction(){
            // ajoute un chassis et retourne la vue voir.html.twig avec son id
            $chassis = new Chassis(); //on creer un nouveau chassi
            $chassis->setTemplate(true);
             $em = $this->getDoctrine()->getManager(); //on appelle l'entity manager
             $em->persist($chassis); // on le persiste        
             $em->flush(); // on le sauvegarde en bdd
             
             //on va maintenant creer une notification
             $notification = true;
             $notificationtext = "un nouveau chassis vient d'etre ajouté";
            
        return $this->render('GodartChassisBundle:Default:voir.html.twig', array('chassis'=>$chassis,'notification'=>$notification,'notificationtext'=>$notificationtext));
            }  
     
       public function supprimerAction($id,$returnerase="defaults"){
           
           
            //on prend le chassis et son id.
                         $em = $this->getDoctrine()->getManager();
                         $chassisrepository = $this->getDoctrine()->getManager()->getRepository('GodartChassisBundle:Chassis');
                         $chassis = $chassisrepository->find($id);
           // on met des notification dans une variable tant que cet objet existe
             $notification = true;
             $notificationtext = "Vous venez d'effacer le chassis: " . $chassis->getDesignation(); ;         
             $em->remove($chassis); // on le remove     
             $em->flush(); // on flush

             //maintenant on liste tout les chassis afin de les envoyer à lister.html.twig
            $liste_chassis = $chassisrepository->findAll();
            //et on retourne
            if ($returnerase == "defaults"){
        return $this->render('GodartChassisBundle:Default:liste.html.twig', array('liste_chassis'=>$liste_chassis,'notification'=>$notification,'notificationtext'=>$notificationtext));
            }
            else {
        return $this->render('GodartDdprixBundle:Default:voir', array('id'=> $returnerase));     
                
            }
            
            }  
    

            public function testAction(){
                                        return $this->render('GodartChassisBundle:Default:test.html.twig'); 
                                        }
            
            
            
            
            
            
            
            
}
