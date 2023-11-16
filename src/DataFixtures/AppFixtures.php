<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Task;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker= Factory::create('bg_BG');

    
        for ($i = 0; $i < 20; $i++) {
$task = new Task ();
$task
// ->setTitle($faker->words($faker->numberBetween(3,6), true))
// ->setContent($faker->paragraphs($faker->numberBetween(7,18), true))
->setTitle($faker->realTextBetween(3, 10))
->setContent($faker->realTextBetween(500, 1400))
->setDateTask($faker->dateTimeBetween('-2 years'));

$manager->persist($task);
}
        $manager->flush();
    }
}
