<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $b1= new Continent();
         $b1->setLibelle("Afrique");
           $manager->persist($b1);
        
        $b2= new Continent();
         $b2->setLibelle("Europe");
           $manager->persist($b2);
        
        $b3= new Continent();
         $b3->setLibelle("Amerique");
           $manager->persist($b3);
        
        $b4= new Continent();
         $b4->setLibelle("Oceanie");
           $manager->persist($b4);
        
        $c1=new Famille();
        $c1->setLibele("Mamifères")
        ->setDescription("Animaux nourrissant leurs petits avec leur lait");
        $manager->persist($c1);
        $c2=new Famille();
        $c2->setLibele("les poissons")
        ->setDescription("Animaux vertébrés vivant des les mers et océans");
        $manager->persist($c2);
        $c3=new Famille();
        $c3->setLibele("oiseaux")
        ->setDescription("Animaux qui pondent des oeufs");
        $manager->persist($c3);
        
        
        $a1 = new Animal(); 
        $a1->setNom("Chien")
        ->setDescription("un animal domestique")
        ->setImage("chien.png")
        ->setPoids(10)
        ->setDangereux(false)
        ->setFamille($c1)
        ->addContinent($b3)
        ->addContinent($b3)
        ->addContinent($b3)
        ->addContinent($b3)
        ->addContinent($b4)
        ->addContinent($b2)
        ->addContinent($b1);
    
        $manager->persist($a1);

        
        $a2 = new Animal(); 
        $a2->setNom("poule")
        ->setDescription("un animal domestique de la basse-court")
        ->setImage("Poule.png")
        ->setPoids(2)
        ->setDangereux(false)
        ->setFamille($c3)
        ->addContinent($b3)
        ->addContinent($b3)
        ->addContinent($b3)
        ->addContinent($b4)
        ->addContinent($b2)
        ->addContinent($b1);
        $manager->persist($a2);

        
        $a3 = new Animal(); 
        $a3->setNom("Requin")
        ->setDescription("un mamifère des oceans")
        ->setImage("requin.png")
        ->setPoids(300)
        ->setDangereux(true)
        ->setFamille($c2)
        ->addContinent($b3)
        ->addContinent($b3)
        ->addContinent($b3)
        ->addContinent($b4)
        ->addContinent($b2)
        ->addContinent($b1);
        $manager->persist($a3);

        $a4 = new Animal(); 
        $a4->setNom("Perroquet")
        ->setDescription("un animal des forets équatoriales")
        ->setImage('perroquet.png')
        ->setPoids(2)
        ->setDangereux(false)
        ->setFamille($c3)
        ->addContinent($b4)
        ->addContinent($b1);
        $manager->persist($a4);

        $manager->flush();
    }
}
