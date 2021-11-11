<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Animal(); 
        $a1->setNom("Chien")
        ->setDescription("un animal domestique")
        ->setImage("chien.png")
        ;
        $manager->persist($a1);

        
        $a2 = new Animal(); 
        $a2->setNom("poule")
        ->setDescription("un animal domestique de la basse-court")
        ->setImage("Poule.png")
        ;
        $manager->persist($a2);

        
        $a3 = new Animal(); 
        $a3->setNom("Requin")
        ->setDescription("un mamifère des oceans")
        ->setImage("requin.png")
        ;
        $manager->persist($a3);

        $a4 = new Animal(); 
        $a4->setNom("Perroquet")
        ->setDescription("un animal des forets équatorial")
        ->setImage("perroquet.png")
        ;
        $manager->persist($a4);

        $manager->flush();
    }
}
