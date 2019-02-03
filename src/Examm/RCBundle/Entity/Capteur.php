<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/01/2019
 * Time: 18:09
 */

namespace Examm\RCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Class Capteur
 * @ORM\Entity
 */
class Capteur
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $Id ;

    /**
     * @ORM\Column(type="float")
     */
    private $XCoordonne ;

    /**
     * @ORM\Column(type="float")
     */
    private $YCoordonne ;


    /**
     * @ORM\ManyToOne(targetEntity="RCSF")
     * @ORM\JoinColumn(referencedColumnName="ref")
     */
    private $RCSF;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getXCoordonne()
    {
        return $this->XCoordonne;
    }

    /**
     * @param mixed $XCoordonne
     */
    public function setXCoordonne($XCoordonne)
    {
        $this->XCoordonne = $XCoordonne;
    }

    /**
     * @return mixed
     */
    public function getYCoordonne()
    {
        return $this->YCoordonne;
    }

    /**
     * @param mixed $YCoordonne
     */
    public function setYCoordonne($YCoordonne)
    {
        $this->YCoordonne = $YCoordonne;
    }

    /**
     * @return mixed
     */
    public function getRCSF()
    {
        return $this->RCSF;
    }

    /**
     * @param mixed $RCSF
     */
    public function setRCSF($RCSF)
    {
        $this->RCSF = $RCSF;
    }




}