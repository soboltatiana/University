<?php
namespace Test\RegisterBundle\Repository;
use Doctrine\ORM\EntityRepository;
/**
 * Description of ObjectRepository
 *
 * @author tatiana
 */
class ObjectRepository extends EntityRepository{
    public function getObjectsWithA(){
        $query=$this->getEntityManager()->
                createQuery("SELECT o FROM TestRegisterBundle:Object o WHERE o.shortName LIKE 'A%'");
        return $query->getResult();
    }    
}
