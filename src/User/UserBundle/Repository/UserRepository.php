<?php

namespace User\UserBundle\Repository;

use User\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

/**
 * Description of UserRepository
 *
 * @author tatiana
 */
class UserRepository extends EntityRepository {

    //put your code here
    public function findOneByUsername($username) {
        $em = $this->getEntityManager();
        $query = $em->createQuery('Select u from UserUserBundle:User u'
                        . ' WHERE u.username=:username')->setParameter('username', $username);
        $user=$query->getSingleResult();
        return $user;
    }

}
