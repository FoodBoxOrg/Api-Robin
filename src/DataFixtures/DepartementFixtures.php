<?php
namespace App\DataFixtures;

use App\Entity\Departement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DepartementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $departements = [
            ['num' => 1, 'name' => 'Ain'],
            ['num' => 2, 'name' => 'Aisne'],
            ['num' => 3, 'name' => 'Allier'],
            ['num' => 4, 'name' => 'Alpes-de-Haute-Provence'],
            ['num' => 5, 'name' => 'Hautes-Alpes'],
            ['num' => 6, 'name' => 'Alpes-Maritimes'],
            ['num' => 7, 'name' => 'Ardèche'],
            ['num' => 8, 'name' => 'Ardennes'],
            ['num' => 9, 'name' => 'Ariège'],
            ['num' => 10, 'name' => 'Aube'],
            ['num' => 11, 'name' => 'Aude'],
            ['num' => 12, 'name' => 'Aveyron'],
            ['num' => 13, 'name' => 'Bouches-du-Rhône'],
            ['num' => 14, 'name' => 'Calvados'],
        ];

        foreach ($departements as $data) {
            $departement = new Departement();
            $departement->setNum($data['num']);
            $departement->setName($data['name']);
            $manager->persist($departement);
        }

        $manager->flush();
    }
}
