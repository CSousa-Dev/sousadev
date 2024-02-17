<?php

namespace Database\Seeders;

use App\Models\Skills;
use App\Models\UserSkills;
use App\Models\Presentation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class UsersSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        UserSkills::truncate();

        $presentation = Presentation::orderBy('created_at', 'desc')->first();

        $skills = Skills::all();

        foreach($skills as $order => $skill) {
            UserSkills::create(
                attributes: [
                    'presentation_id' => $presentation->id,
                    'skill_id' => $skill->id,
                    'order' => $order + 1
                ]
            );
            
        }
    }
}
