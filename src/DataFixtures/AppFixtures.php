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

        
        $userchauffeur = new Userchauffeur(); 
        for($i = 1;$i<=10;$i){
            $userchauffeur->setNom("chauffeur N° ".$i)
                          ->setPrenom("prenom ".$i);
            $manager->persist($userchauffeur); 
        }
        
        

        $manager->flush();
    }
}
