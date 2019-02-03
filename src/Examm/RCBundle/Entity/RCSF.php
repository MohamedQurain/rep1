<?php

/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/01/2019
 * Time: 18:04
 */

namespace Examm\RCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Class RCSF
 * @ORM\Entity
 */
class RCSF
{

    /**
     * @ORM\Id
     * @ORM\Column(type="string",length=10)
     */
    private $ref;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $type;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbLimit;

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return mixed
     */
    public function getNbLimit()
    {
        return $this->nbLimit;
    }

    /**
     * @param mixed $nbLimit
     */
    public function setNbLimit($nbLimit)
    {
        $this->nbLimit = $nbLimit;
    }





}