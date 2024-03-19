<?php

namespace Database\Seeders;

use App\Enums\ProjectType;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'type' => ProjectType::Project,
            'title' => 'Car API',
            'description' => 'A simple API to manage cars.',
            'github_link' => 'https://github.com/F1nnG/Car-api',
            'showcase_image' => 'car-api.png',
        ]);

        Project::create([
            'type' => ProjectType::Project,
            'title' => 'PHP Framework',
            'description' => 'A simple PHP framework.',
            'github_link' => 'https://github.com/F1nnG/PHP-Framework',
            'showcase_image' => 'php-framework.png',
        ]);
    }
}
