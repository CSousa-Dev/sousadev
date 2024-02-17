<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills::truncate();

        Skills::create(
            [
                'name' => 'PHP',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731352/php-icon_k9tylx.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Laravel',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731350/laravel-icon_hdp8xx.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'JavaScript',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/js-icon_vxpmrn.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Vue',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731356/vue-icon_ggb3xj.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'React',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731355/react-icon_sspona.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'React Native',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731355/react-icon_sspona.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Typescript',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731356/ts-icon_lnctzf.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'BPMN',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731350/bpm-icon_lrlrps.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Docker',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731350/docker-icon_vbe6rb.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'PostgreSQL',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726081334/postgressicon_grnhsj.svg', 
            ]
        );
        
        Skills::create(
            [
                'name' => 'Bootstrap',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726081725/bootstrap_bqycia.svg', 
            ]
        );
        
        Skills::create(
            [
                'name' => 'Git',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726083908/giticon_muk9g0.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'NodeJS',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726084242/nodejs_q8f0ih.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'MongoDB',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726084997/Mongodb_ydhm5t.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Angular',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726085450/Angular_m5ncak.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'HTML',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726085642/Html_lzfru8.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'CSS',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726085794/css_vhwihk.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Symfony',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1725731355/symfony-icon_cx6hk7.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'RabbitMQ',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726087626/rabbitmq_2_znyks6.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Redis',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726087924/redis_ixu36x.svg', 
            ]
        );

        Skills::create(
            [
                'name' => 'Power BI',
                'image_url' => 'https://res.cloudinary.com/devy77u3i/image/upload/v1726088488/power-bi_q2fnkv.svg', 
            ]
        );
    }
}
