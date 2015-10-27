<?php

namespace Test\RegisterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teacher
 *
 * @author tatiana
 */

/**
 * @ORM\Entity
 */
class Teacher {

    /**
     *
     * @ORM\Column(name="idTeacher",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="firstName",type="string",length=30)
     */
    protected $firstName;

    /**
     *
     * @ORM\Column(name="lastName",type="string",length=30)
     */
    protected $lastName;

    /**
     *
     * @ORM\Column(name="degree",type="string",length=40);
     */
    protected $degree;

    /**
     * 
     *  
     * @ORM\ManyToMany(targetEntity="Test\RegisterBundle\Entity\Object",mappedBy="teachers",cascade={"persist", "merge"})
     */
    protected $objects;

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Teacher
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Teacher
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set degree
     *
     * @param string $degree
     *
     * @return Teacher
     */
    public function setDegree($degree) {
        $this->degree = $degree;

        return $this;
    }

    /**
     * Get degree
     *
     * @return string
     */
    public function getDegree() {
        return $this->degree;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

}
