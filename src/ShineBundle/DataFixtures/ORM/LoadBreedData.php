<?php
/**
 * Created by PhpStorm.
 * User: viktar
 * Date: 10.11.2015
 * Time: 0:06
 */

namespace ShineBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ShineBundle\Entity\Breed;

class LoadBreedData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $breedBichon = new Breed();
        $breedBichon->setTitle('Бишон Фризе');

        $breedRussBichon = new Breed();
        $breedRussBichon->setTitle('Русская цветная болонка');

        $manager->persist($breedBichon);
        $manager->persist($breedRussBichon);
        $manager->flush();

        $this->addReference('breed-bichon', $breedBichon);
        $this->addReference('breed-russ-bichon', $breedRussBichon);
    }
    public function getOrder() {
        return 1;
    }
}