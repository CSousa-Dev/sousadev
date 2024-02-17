<?php

namespace Database\Seeders;

use App\Models\Presentation;
use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Services::truncate();

        $presentation = Presentation::first();
        Services::create(
            [
                'presentation_id' => $presentation->id,
                'title' => 'Desenvolvimento de 
                    <span class="text-md tertiary x-bold"> <br/>Aplicações Web</span>',
                'description' => 'Do projeto à codificação criando soluções web <span class="semi-bold tertiary"> modernas, escaláveis e de alta performance</span> com as melhores e mais atuais práticas de mercado para impulsionar sua equipe e seus negócios.</p>',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725599010/code_bs7wkm.svg',
                'order' => 1,
            ]
        );
    }
}
