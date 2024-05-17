<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BooksFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $book = new Book(
                'Book ' . $i,
                'Author ' . $i,
                'Description ' . $i,
            );
            $manager->persist($book);
        }
        $manager->flush();
    }
}
