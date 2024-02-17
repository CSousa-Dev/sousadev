<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SkillsSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\ServicesSeeder;
use Database\Seeders\UsersSkillsSeeder;
use Database\Seeders\PresentationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {    
        $this->call(PresentationSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(UsersSkillsSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
