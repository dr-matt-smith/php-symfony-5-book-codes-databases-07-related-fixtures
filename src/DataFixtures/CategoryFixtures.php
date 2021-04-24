<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cat1 = new Category();
        $cat1->setName('hardware');
        $manager->persist($cat1);

        $cat2 = new Category();
        $cat2->setName('kitchenware');
        $manager->persist($cat2);

        $manager->flush();

        // create named references
        $this->addReference('CATEGORY_HARDWARE', $cat1);
        $this->addReference('CATEGORY_KITCHENWARE', $cat2);
    }
}
