<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $CATEGORIES = [
            'Fantasy', 'Science-Fiction', 'Mystère', 'Thriller', 'Romance', 'Historique',
            'Biographies', 'Histoire', 'Science', 'Philosophie', 'Psychologie', 'Développement personnel',
            'Contes pour enfants', 'Livres illustrés', 'Romans jeunesse', 'Adolescents', 'Fantasy pour enfants',
            'Poésie', 'Théâtre', 'Classiques', 'Nouvelles',
            'Beaux-Arts', 'Musique', 'Photographie', 'Cinéma',
            'Sociologie', 'Politique', 'Économie', 'Anthropologie',
            'Cuisine', 'Jardinage', 'Bricolage', 'Voyages',
            'Nutrition', 'Méditation', 'Fitness', 'Médecine',
            'Gestion', 'Marketing', 'Finance', 'Entrepreneuriat',
            'Programmation', 'Réseaux', 'Intelligence Artificielle', 'Cyber Sécurité'
        ];
        foreach ($CATEGORIES as $category) {
            $newCategory = new Category(
                $category
            );
            $manager->persist($newCategory);
        }

        $manager->flush();
    }
}
