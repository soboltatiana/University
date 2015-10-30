<?php

namespace User\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**

 * @ORM\Entity(repositoryClass="OC\UserBundle\Entity\UserRepository")

 */
class  User
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="username", type="string", length=255, unique=true)
   */
  private $username;

  /**
   * @ORM\Column(name="password", type="string", length=255)
   */
  private $password;

  /**
   * @ORM\Column(name="salt", type="string", length=255)
   */
  private $salt;

  /**
   * @ORM\Column(name="roles", type="array")
   */
  private $roles = array();

   /**
   *
   * @ORM\Column(name="group",type=string, length=10)
   */
  private $group;

  public function eraseCredentials()
  {
  }

}