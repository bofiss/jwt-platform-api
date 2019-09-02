<?php

namespace App\DataFixtures;

use App\Entity\Avis;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AvisFixtures extends Fixture
{
    
    private $faker;
    public function load(ObjectManager $manager)
    {
        $this->faker = \Faker\Factory::create('fr_FR');
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 10; $i++) {
            $avis = new Avis();
            $avis->setUsername($this->faker->username);
            $avis->setEmail($this->faker->email);
            $avis->setNumeroAdherant($this->faker->numberBetween(111111, 999999));
            $avis->setComment($this->faker->text(10));
            $manager->persist($avis);
        }

        $manager->flush();
    }
}
