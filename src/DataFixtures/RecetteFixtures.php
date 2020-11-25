<?php

namespace App\DataFixtures;

use App\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use PhpParser\Node\Expr\Cast\String_;
use App\Entity\Categorie;

class RecetteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        $entree = (new Categorie())->setNom('Entrée');
        $plat = (new Categorie())->setNom('Plat');
        $dessert = (new Categorie())->setNom('Dessert');
        $categories = [$entree, $plat, $dessert];

        // persister les 3 avants car objets n'existant pas encore en BDD
        $manager->persist($entree);
        $manager->persist($plat);
        $manager->persist($dessert);

        $manager->flush();

        //Créer automatiquement 15 recettes
        for ($nbRec=1; $nbRec <=15; $nbRec++){

        $recette = new Recette(); // createdAt par défaut
        $recette
            ->setTitre($faker->lexify('Recette ???'))
            ->setResume($faker->sentence($nbWords = 12, $variableNbWords = true))
            ->setPreparation($faker->text(200))
            ->setPersonne($faker->numberBetween($min = 1, $max = 8))
            ->setTemps($faker->numberBetween($min = 15, $max = 120) . " min")
            ->setCategorie($faker->randomElement($categories));

        $manager->persist($recette);
        }

        $manager->flush();
    }
}
