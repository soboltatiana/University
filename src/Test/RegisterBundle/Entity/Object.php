<?php

namespace Test\RegisterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Object
 *
 * @author tatiana
 */

/**
 * @ORM\Entity
 */
class Object {

    /**
     *
     * @ORM\Column(name="idObject",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="shortName",type="string",length=10)
     */
    private $shortName;

    /**
     *
     * @ORM\Column(name="longName",type="string", length=100);
     */
    private $longName;

    /**
     *
     * @ORM\Column(name="description",type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Test\RegisterBundle\Entity\Teacher",inversedBy="objects",cascade={"persist", "merge"})
     * @ORM\JoinTable(name="Teachers_objects",
     *   joinColumns={@ORM\JoinColumn(name="object_id", referencedColumnName="idObject")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="teacher_id", referencedColumnName="idTeacher")}
     * )
     */
    private $teachers;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     *
     * @return Object
     */
    public function setShortName($shortName) {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string
     */
    public function getShortName() {
        return $this->shortName;
    }

    /**
     * Set longName
     *
     * @param string $longName
     *
     * @return Object
     */
    public function setLongName($longName) {
        $this->longName = $longName;

        return $this;
    }

    /**
     * Get longName
     *
     * @return string
     */
    public function getLongName() {
        return $this->longName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Object
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teachers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add teacher
     *
     * @param \Test\RegisterBundle\Entity\Teacher $teacher
     *
     * @return Object
     */
    public function addTeacher(\Test\RegisterBundle\Entity\Teacher $teacher)
    {
        $this->teachers[] = $teacher;

        return $this;
    }

    /**
     * Remove teacher
     *
     * @param \Test\RegisterBundle\Entity\Teacher $teacher
     */
    public function removeTeacher(\Test\RegisterBundle\Entity\Teacher $teacher)
    {
        $this->teachers->removeElement($teacher);
    }

    /**
     * Get teachers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeachers()
    {
        return $this->teachers;
    }
}
