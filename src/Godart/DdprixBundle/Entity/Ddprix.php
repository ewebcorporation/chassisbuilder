<?php

namespace Godart\DdprixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ddprix
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Godart\DdprixBundle\Entity\DdprixRepository")
 */
class Ddprix


                {
      public function __construct(){
        //construction de la classe chasssis par defaut

        $this->date = new \Datetime();
        $this->designation = "nouvelle demande de prix";
        $this->status = "open";
        $this->chassis = new \Doctrine\Common\Collections\ArrayCollection();
         }  
        
        
     /**
     * @ORM\OneToMany(targetEntity="Godart\ChassisBundle\Entity\Chassis", mappedBy="ddprix")
     */
    private $chassis;                                
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
                                     
    private $id;
   
    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireint", type="string", length=255, nullable=true)
     */
    private $commentaireint;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireext", type="string", length=255, nullable=true)
     */
    private $commentaireext;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Ddprix
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Ddprix
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set commentaireint
     *
     * @param string $commentaireint
     * @return Ddprix
     */
    public function setCommentaireint($commentaireint)
    {
        $this->commentaireint = $commentaireint;
    
        return $this;
    }

    /**
     * Get commentaireint
     *
     * @return string 
     */
    public function getCommentaireint()
    {
        return $this->commentaireint;
    }

    /**
     * Set commentaireext
     *
     * @param string $commentaireext
     * @return Ddprix
     */
    public function setCommentaireext($commentaireext)
    {
        $this->commentaireext = $commentaireext;
    
        return $this;
    }

    /**
     * Get commentaireext
     *
     * @return string 
     */
    public function getCommentaireext()
    {
        return $this->commentaireext;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Ddprix
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add chassis
     *
     * @param \Godart\ChassisBundle\Entity\Chassis $chassis
     * @return Ddprix
     */
    public function addChassis(\Godart\ChassisBundle\Entity\Chassis $chassis)
    {
        
        $this->chassis[] = $chassis;
    
        return $this;
    }

    /**
     * Remove chassis
     *
     * @param \Godart\ChassisBundle\Entity\Chassis $chassis
     */
    public function removeChassis(\Godart\ChassisBundle\Entity\Chassis $chassis)
    {
        $this->chassis->removeElement($chassis);
    }

    /**
     * Get chassis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChassis()
    {
        return $this->chassis;
    }
}