<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // create named references
        $cat1 = $this->getReference('CATEGORY_HARDWARE');
        $cat2 = $this->getReference('CATEGORY_KITCHENWARE');

        $product1 = new Product();
        $product1->setName('hammer');
        $product1->setCategory($cat1);
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('plunger');
        $product2->setCategory($cat2);
        $manager->persist($product2);

        $manager->flush();
    }
}
