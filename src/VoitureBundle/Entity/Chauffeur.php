<?php

/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/01/2019
 * Time: 15:41
 */
namespace VoitureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Class Chauffeur
 * @ORM\Entity
 */
class Chauffeur
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string",length=10)
     */
    private $cin;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $prenom;

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }




}