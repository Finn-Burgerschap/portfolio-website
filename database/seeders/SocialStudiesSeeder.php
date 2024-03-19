<?php

namespace Database\Seeders;

use App\Enums\ProjectType;
use App\Models\Project;
use Illuminate\Database\Seeder;

class SocialStudiesSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 1 - Opdracht 1',
            'description' => 'Creatie van een Nieuwswebsite over Diversiteit en Inclusie.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%201/opdracht%201',
            'showcase_image' => 'p1o1.png',
        ]);

        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 1 - Opdracht 2',
            'description' => 'Verdieping van de Nieuwswebsite over Sociale Cohesie.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%201/opdracht%202',
            'showcase_image' => 'p1o2.png',
        ]);

        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 1 - Opdracht 3',
            'description' => 'Anti-Scammer Website Ontwikkelen.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%201/opdracht%203',
            'showcase_image' => 'p1o3.png',
        ]);

        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 2',
            'description' => 'Een document met allerlei opdrachten.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%202',
            'showcase_image' => 'p2o1.png',
        ]);

        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 3 - Opdracht 1',
            'description' => 'Zelfgemaakte Kieswijzer.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%203/opdracht%201',
            'showcase_image' => 'p3o1.png',
        ]);

        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 3 - Opdracht 2',
            'description' => 'Promotiefilmpje voor een Politieke Partij.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%203/opdracht%202',
            'showcase_image' => 'p3o2.png',
        ]);

        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 4 - Opdracht 1',
            'description' => 'Vitaal Burgerschap - IT en Gezondheidsbewustzijn.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%204/opdracht%201',
            'showcase_image' => 'p4o1.png',
        ]);

        Project::create([
            'type' => ProjectType::SocialStudies,
            'title' => 'Periode 4 - Opdracht 2',
            'description' => 'Programmeerportfolio voor Burgerschap.',
            'github_link' => 'https://github.com/Finn-Burgerschap/opdrachten/tree/main/periode%204/opdracht%202',
            'showcase_image' => 'p4o2.png',
        ]);
    }
}
