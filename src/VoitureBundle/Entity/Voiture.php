<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/01/2019
 * Time: 15:48
 */

namespace VoitureBundle\Entity;
use Doctrine\ORM\Mapping as ORM;



/**
 * Class Voiture
 * @ORM\Entity
 */
class Voiture
{

    /**
     * @ORM\Id
     * @ORM\Column(type="string",length=10)
     */
    private $immatricule;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $marque;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;


    /**
     * @ORM\ManyToOne(targetEntity="Chauffeur")
     * @ORM\JoinColumn(referencedColumnName="cin")
     */
    private $Chauffeur;

    /**
     * @return mixed
     */
    public function getImmatricule()
    {
        return $this->immatricule;
    }

    /**
     * @param mixed $immatricule
     */
    public function setImmatricule($immatricule)
    {
        $this->immatricule = $immatricule;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getChauffeur()
    {
        return $this->Chauffeur;
    }

    /**
     * @param mixed $Chauffeur
     */
    public function setChauffeur($Chauffeur)
    {
        $this->Chauffeur = $Chauffeur;
    }





}