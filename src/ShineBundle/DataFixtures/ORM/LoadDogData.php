<?php
/**
 * Created by PhpStorm.
 * User: viktar
 * Date: 10.11.2015
 * Time: 0:14
 */

namespace ShineBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ShineBundle\Entity\Dog;


class LoadDogData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $dogLudvig = new Dog();
        $dogLudvig->setTitle('Людвиг');
        $dogLudvig->setDescription('Вот такая собака');
        $dogLudvig->setBirth(new \DateTime('2005-07-16'));
        $dogLudvig->setBreed($this->getReference('breed-bichon'));

        $manager->persist($dogLudvig);

        $manager->flush();

        $this->addReference('ludvig-dog', $dogLudvig);
    }
    public function getOrder() {
        return 2;
    }
}