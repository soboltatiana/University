<?php

namespace User\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use User\UserBundle\Entity\User;

/**
 * Description of LoadUser
 *
 * @author tatiana
 */
class LoadUser implements FixtureInterface {

    public function load(ObjectManager $manager) {
        // Les noms d'utilisateurs à créer

        $listNames = array('Alexandre', 'Marine', 'Anna');


        foreach ($listNames as $name) {

            // On crée l'utilisateur

            $user = new User;


            // Le nom d'utilisateur et le mot de passe sont identiques

            $user->setUsername($name);

            $user->setPassword($name);


            // On ne se sert pas du sel pour l'instant

            $user->setSalt('');

            // On définit uniquement le role ROLE_USER qui est le role de base

            $user->setRoles(array('ROLE_USER'));
            $group="FI121";
            $user->setGroup($group);


            // On le persiste

            $manager->persist($user);
        }


        // On déclenche l'enregistrement

        $manager->flush();
    }

//put your code here
}
