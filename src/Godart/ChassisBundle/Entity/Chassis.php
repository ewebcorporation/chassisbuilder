<?php

namespace Godart\ChassisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chassis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Godart\ChassisBundle\Entity\ChassisRepository")
 */
class Chassis
{
    
    
    public function __construct(){
        //construction de la classe chasssis par defaut

        $this->date = new \Datetime();
        $this->b64 = "PD94bWwgdmVyc2lvbj0iMS4wIj8+Cjxzdmcgd2lkdGg9IjUwMCIgaGVpZ2h0PSI1MDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8IS0tIENyZWF0ZWQgd2l0aCBNZXRob2QgRHJhdyAtIGh0dHA6Ly9naXRodWIuY29tL2R1b3BpeGVsL01ldGhvZC1EcmF3LyAtLT4KIDxnPgogIDx0aXRsZT5iYWNrZ3JvdW5kPC90aXRsZT4KICA8cmVjdCBmaWxsPSIjZmZmIiBpZD0iY2FudmFzX2JhY2tncm91bmQiIGhlaWdodD0iNTAyIiB3aWR0aD0iNTAyIiB5PSItMSIgeD0iLTEiLz4KICA8ZyBkaXNwbGF5PSJub25lIiBvdmVyZmxvdz0idmlzaWJsZSIgeT0iMCIgeD0iMCIgaGVpZ2h0PSIxMDAlIiB3aWR0aD0iMTAwJSIgaWQ9ImNhbnZhc0dyaWQiPgogICA8cmVjdCBmaWxsPSJ1cmwoI2dyaWRwYXR0ZXJuKSIgc3Ryb2tlLXdpZHRoPSIwIiB5PSIwIiB4PSIwIiBoZWlnaHQ9IjEwMCUiIHdpZHRoPSIxMDAlIi8+CiAgPC9nPgogPC9nPgogPGc+CiAgPHRpdGxlPkxheWVyIDE8L3RpdGxlPgogIDxyZWN0IGlkPSJzdmdfMyIgaGVpZ2h0PSIwIiB3aWR0aD0iMyIgeT0iMTIzIiB4PSI0MzIuNSIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZT0iIzAwMCIgZmlsbD0iI2ZmZiIvPgogIDxyZWN0IGlkPSJzdmdfMTYiIGhlaWdodD0iNDQwIiB3aWR0aD0iMzA4IiB5PSIzMiIgeD0iMTA0LjUiIGZpbGwtb3BhY2l0eT0ibnVsbCIgc3Ryb2tlLW9wYWNpdHk9Im51bGwiIHN0cm9rZS13aWR0aD0iNC41IiBzdHJva2U9IiMwMDAiIGZpbGw9Im5vbmUiLz4KICA8bGluZSBzdHJva2UtbGluZWNhcD0ibnVsbCIgc3Ryb2tlLWxpbmVqb2luPSJudWxsIiBpZD0ic3ZnXzE4IiB5Mj0iMjQ0IiB4Mj0iNDEyLjUiIHkxPSIzMSIgeDE9IjEwNC41IiBmaWxsLW9wYWNpdHk9Im51bGwiIHN0cm9rZS1vcGFjaXR5PSJudWxsIiBzdHJva2Utd2lkdGg9IjQuNSIgc3Ryb2tlPSIjMDAwIiBmaWxsPSJub25lIi8+CiAgPGxpbmUgc3Ryb2tlLWxpbmVjYXA9Im51bGwiIHN0cm9rZS1saW5lam9pbj0ibnVsbCIgaWQ9InN2Z18xOSIgeTI9IjQ3MiIgeDI9IjEwMy41IiB5MT0iMjQyIiB4MT0iNDEyLjUiIGZpbGwtb3BhY2l0eT0ibnVsbCIgc3Ryb2tlLW9wYWNpdHk9Im51bGwiIHN0cm9rZS13aWR0aD0iNC41IiBzdHJva2U9IiMwMDAiIGZpbGw9Im5vbmUiLz4KICA8dGV4dCB4bWw6c3BhY2U9InByZXNlcnZlIiB0ZXh0LWFuY2hvcj0ibGVmdCIgZm9udC1mYW1pbHk9IkhlbHZldGljYSwgQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMjQiIGlkPSJzdmdfMjAiIHk9IjIxOSIgeD0iNDYuNSIgZmlsbC1vcGFjaXR5PSJudWxsIiBzdHJva2Utb3BhY2l0eT0ibnVsbCIgc3Ryb2tlLXdpZHRoPSIwIiBzdHJva2U9IiMwMDAiIGZpbGw9IiMwMDAwMDAiPjIzMDwvdGV4dD4KICA8dGV4dCB4bWw6c3BhY2U9InByZXNlcnZlIiB0ZXh0LWFuY2hvcj0ibGVmdCIgZm9udC1mYW1pbHk9IkhlbHZldGljYSwgQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMjQiIGlkPSJzdmdfMjIiIHk9IjQ1NSIgeD0iMzM5LjUiIGZpbGwtb3BhY2l0eT0ibnVsbCIgc3Ryb2tlLW9wYWNpdHk9Im51bGwiIHN0cm9rZS13aWR0aD0iMCIgc3Ryb2tlPSIjMDAwIiBmaWxsPSIjMDAwMDAwIj4zMDA8L3RleHQ+CiA8L2c+Cjwvc3ZnPg==";
        $this->designation = "nouveau chassis";
        $this->matiere = "PVC";
        $this->couleurext = "BLANC";
        $this->couleurint = "BLANC";
        $this->seuil = "seuil";
        //Par defaut, tout chassis creer n'est pas un template
        $this->template = FALSE;
   
        
                                     }
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Godart\DdprixBundle\Entity\Ddprix", inversedBy="chassis") 
     * @ORM\JoinColumn(name="ddprix_id", referencedColumnName="id", nullable=true)
     */
    private $ddprix;

    
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    

    
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="b64", type="text", length=65000, nullable=true)
     */
    private $b64;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="template", type="boolean")
     */
    private $template;
    
    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="matiere", type="string", length=255)
     */
    private $matiere;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurint", type="string", length=255)
     */
    private $couleurint;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurext", type="string", length=255, nullable = true)
     */
    private $couleurext;

    /**
     * @var string
     *
     * @ORM\Column(name="seuil", type="string", length=255,nullable=true)
     */
    private $seuil;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vitrage", type="string", length=255,nullable=true)
     */
    private $vitrage;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="rainure", type="string", length=255, nullable=true)
     */
    private $rainure;

    /**
     * @var string
     *
     * @ORM\Column(name="essence", type="string", length=255, nullable=true)
     */
    private $essence;

    /**
     * @var string
     *
     * @ORM\Column(name="interface", type="string", length=255, nullable=true)
     */
    private $interface;

    /**
     * @var string
     *
     * @ORM\Column(name="lasure", type="string", length=255, nullable=true)
     */
    private $lasure;

   


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
     * Set date
     *
     * @param \DateTime $date
     * @return Chassis
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
     * Set b64
     *
     * @param string $b64
     * @return Chassis
     */
    public function setB64($b64)
    {
        $this->b64 = $b64;
    
        return $this;
    }

    /**
     * Get b64
     *
     * @return string 
     */
    public function getB64()
    {
        return $this->b64;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Chassis
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
     * Set matiere
     *
     * @param string $matiere
     * @return Chassis
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return string 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set couleurint
     *
     * @param string $couleurint
     * @return Chassis
     */
    public function setCouleurint($couleurint)
    {
        $this->couleurint = $couleurint;
    
        return $this;
    }

    /**
     * Get couleurint
     *
     * @return string 
     */
    public function getCouleurint()
    {
        return $this->couleurint;
    }

    /**
     * Set couleurext
     *
     * @param string $couleurext
     * @return Chassis
     */
    public function setCouleurext($couleurext)
    {
        $this->couleurext = $couleurext;
    
        return $this;
    }

    /**
     * Get couleurext
     *
     * @return string 
     */
    public function getCouleurext()
    {
        return $this->couleurext;
    }

    /**
     * Set seuil
     *
     * @param string $seuil
     * @return Chassis
     */
    public function setSeuil($seuil)
    {
        $this->seuil = $seuil;
    
        return $this;
    }

    /**
     * Get seuil
     *
     * @return string 
     */
    public function getSeuil()
    {
        return $this->seuil;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Chassis
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

   

    /**
     * Set rainure
     *
     * @param string $rainure
     * @return Chassis
     */
    public function setRainure($rainure)
    {
        $this->rainure = $rainure;
    
        return $this;
    }

    /**
     * Get rainure
     *
     * @return string 
     */
    public function getRainure()
    {
        return $this->rainure;
    }

    /**
     * Set essence
     *
     * @param string $essence
     * @return Chassis
     */
    public function setEssence($essence)
    {
        $this->essence = $essence;
    
        return $this;
    }

    /**
     * Get essence
     *
     * @return string 
     */
    public function getEssence()
    {
        return $this->essence;
    }

    /**
     * Set interface
     *
     * @param string $interface
     * @return Chassis
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;
    
        return $this;
    }

    /**
     * Get interface
     *
     * @return string 
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set lasure
     *
     * @param string $lasure
     * @return Chassis
     */
    public function setLasure($lasure)
    {
        $this->lasure = $lasure;
    
        return $this;
    }

    /**
     * Get lasure
     *
     * @return string 
     */
    public function getLasure()
    {
        return $this->lasure;
    }

    /**
     * Set div1
     *
     * @param string $div1
     * @return Chassis
     */
   

    /**
     * Set vitrage
     *
     * @param string $vitrage
     * @return Chassis
     */
    public function setVitrage($vitrage)
    {
        $this->vitrage = $vitrage;
    
        return $this;
    }

    /**
     * Get vitrage
     *
     * @return string 
     */
    public function getVitrage()
    {
        return $this->vitrage;
    }

    /**
     * Set template
     *
     * @param boolean $template
     * @return Chassis
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    
        return $this;
    }

    /**
     * Get template
     *
     * @return boolean 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set ddprix
     *
     * @param \Godart\DdprixBundle\Entity\Ddprix $ddprix
     * @return Chassis
     */
    public function setDdprix(\Godart\DdprixBundle\Entity\Ddprix $ddprix = null)
    {
        $this->ddprix = $ddprix;
    
        return $this;
    }

    /**
     * Get ddprix
     *
     * @return \Godart\DdprixBundle\Entity\Ddprix 
     */
    public function getDdprix()
    {
        return $this->ddprix;
    }
}