<?php

namespace Database\Seeders;

use App\Models\Presentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): int
    {
        Presentation::truncate();
        $presentation = Presentation::create(
            [
                'gretting' => 'Olá, eu sou!',
                'name' => 'Renato Sousa',
                'job_title' => 'Desenvolvedor de Software',
                'motto' => 'Tornando melhor o dia a dia de pessoas e negócios através da tecnologia.',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725597860/presentation-photo_ggzywl.png',
            ]
        ); 

        return $presentation->id;
    }
}
