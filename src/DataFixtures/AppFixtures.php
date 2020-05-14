<?php

namespace App\DataFixtures;

use App\Entity\Userchauffeur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        for($i = 1;$i<=10;$i++){
            
            $userchauffeur = new Userchauffeur();
            $userchauffeur->setNom("chauffeur N° ".$i)
                          ->setPrenom("prenom ".$i)
                          ->setEmail('a@a.a')
                          ->setPassword('non');
            $manager->persist($userchauffeur); 
        }
        $manager->flush();
}
}