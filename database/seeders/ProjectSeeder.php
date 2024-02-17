<?php

namespace Database\Seeders;

use App\Models\Skills;
use App\Models\Presentation;
use App\Models\Project;
use App\Models\ProjectImages;
use App\Models\ProjectSkills;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Project::truncate();    
        $presentation = Presentation::orderBy('created_at', 'desc')->first();

        $Twinsys = Project::create(
            [
                'presentation_id' => $presentation->id,
                'title' => 'Twinsys',
                'subtitle' => 'Solução em Gestão Eficiente para Comércio Exterior',
                'basic_description' => 'Descubra nossa contribuição para a evolução e aprimoramento do Twinsys, uma solução avançada para o comércio exterior.',
                'description' => '
                    <p>
                    <strong>Twinsys</strong> é uma solução avançada para o setor de comércio exterior, desenvolvida pela <a href="https://twin.com.br/">Twin Consultoria Aduaneira e Tributária</a>. Desde 2022, contribuo ativamente para o projeto, desempenhando papéis chave em:
                    </p>
                    <ul>
                        <li><strong>Suporte Técnico:</strong> Fornecimento de suporte especializado para garantir a resolução eficiente de problemas dos usuários, assegurando a continuidade e a estabilidade do sistema.</li>
                        <li><strong>Desenvolvimento Front-End:</strong> Criação de layouts e interfaces que melhoram a experiência do usuário, oferecendo uma navegação intuitiva e funcionalidade aprimorada.</li>
                        <li><strong>Integrações Complexas:</strong> Implementação e manutenção de integrações com APIs governamentais e privadas, facilitando a comunicação e a interoperabilidade entre sistemas.</li>
                        <li><strong>Melhorias Contínuas:</strong> Realização de atualizações e melhorias para otimizar o desempenho e a usabilidade do sistema, respondendo às necessidades emergentes e às mudanças do mercado.</li>
                    </ul>',
                'situation' => 'running',
                'company' => 'Twin Consultoria Adinaeira e Tributária',
                'company_url' => 'https://twin.com.br/',
                'slug' => 'twinsys-solucao-em-gestao-eficiente-para-comercio-exterior',
                'project_type' => 'Colaboration',
                'highlighted' => true
            ]
        );

        $FarrigaTec = Project::create(
            attributes: [
                'presentation_id' => $presentation->id,
                'title' => 'FarrigaTec',
                'subtitle' => 'Irrigação Inteligente Para o Agronegócio',
                'basic_description' => 'Sistema integrado de gestão inteligente de irrigação, desenvolvido para otimizar a produção agrícola e reduzir o consumo de recursos hídricos.',
                'description' => '
                    <p>
                        Sistema completo de <strong>gestão inteligente de irrigação</strong> desenvolvido para otimizar o uso de recursos hídricos em ambientes agrícolas. Utilizando sensores de umidade do solo, temperatura e detecção de chuva, o sistema monitora as condições em tempo real e controla automaticamente bombas de irrigação, permitindo controle manual, agendado ou automatizado.
                    </p>
                    <p>
                        A solução foi projetada com conceitos adaptados de <strong>Domain-Driven Design (DDD)</strong> e <strong>Clean Architecture</strong>, garantindo modularidade e facilidade de manutenção. A comunicação via <strong>WebSockets</strong> permite interação instantânea com os dispositivos, seja pela web ou por aplicativos móveis, oferecendo uma experiência contínua e eficiente.
                    </p>
                    <p>
                        Além disso, o sistema incorpora um <strong>Business Intelligence (BI)</strong> personalizado para gerar insights sobre o uso da água e eficiência da irrigação. Os dashboards e relatórios detalhados ajudam os usuários a tomar decisões estratégicas, otimizando a produtividade e reduzindo o desperdício de recursos.
                    </p>
                    <p>
                        Este projeto teve início em uma horta experimental no curso de graduação e, Gestão em Tecnologia da Informação da <a href="https://fatecfrancodarocha.edu.br/" target="_blank">FATEC Franco da Rocha</a>, em colaboração com <a href="https://www.linkedin.com/in/alexcsousa/" target="_blank">Alex Sousa</a>, que foi impressindível para o projeto liderando a parte técnica do dispositivo embarcado, Prof. Dr José que teve papel impar na criação das ligações elêtronicas do dispositivo e a Profa. Dra e Coordenadora do curso  <a href="https://www.linkedin.com/in/silvia-m%C2%AA-farani-costa-a1169b131/" target="_blank">Silvia Farani</a> que orientou o desenvolvimento e contribuio com suporte acadêmico e estratégico. O projeto agora deixa o âmbito acadêmico caminha para aplicação em diferentes cenários agrícolas.
                    </p>',

                    // , o <a href="https://www.linkedin.com/in/professorjose" target="_blank">Professor José</a>,
                'situation' => 'developing',
                'slug' => 'farriga-tec',
                'project_type' => 'Colaboration',
                'highlighted' => true
            ]
        );

        $MySchedule = Project::create(
            [
                'presentation_id' => $presentation->id,
                'title' => 'MySchedule',
                'subtitle' => 'Controle de Agendamentos',
                'basic_description' => 'Sistema de controle de agendamentos com interface administrativa, avisos automatizados, pagamentos antecipados e módulo para integração com demais sites e aplicativos.',
                'description' => '
                    <p>
                        <strong>MySchedule</strong> é um sistema completo de controle de agendamentos, ideal para salões de beleza, clínicas de estética e outros estabelecimentos que precisam gerenciar datas e horários para atendimentos. O sistema oferece uma interface administrativa intuitiva onde os usuários podem acessar e gerenciar agendamentos, visualizar compromissos futuros e gerar relatórios detalhados sobre as reservas.
                    </p>
                    <p>
                        Com recursos avançados, o MySchedule facilita a comunicação com clientes e colaboradores através de avisos automatizados sobre agendamentos próximos e confirmações. A funcionalidade de pagamento antecipado via aplicativo permite que os clientes realizem pagamentos com facilidade, melhorando a experiência e garantindo a segurança das reservas.
                    </p>
                    <p>
                        Um dos destaques do sistema é o seu módulo de integração, que pode ser facilmente embedado em sites e aplicações pessoais utilizando uma chave de API. Isso permite que os clientes do estabelecimento visualizem e façam agendamentos diretamente a partir do site do negócio.
                    </p>
                    <p>
                        Além disso, o MySchedule oferece notificações em tempo real para todos os usuários conectados, garantindo que as informações sobre agendamentos sejam atualizadas instantaneamente e que todas as partes envolvidas permaneçam informadas.
                    </p>',
                'situation' => 'developing',
                'slug' => 'my-schedule-controle-de-agendamentos',
                'project_type' => 'Own',
            ]
        );

        $PoupeMais = Project::create(
            [
                'presentation_id' => $presentation->id,
                'title' => 'PoupeMais',
                'subtitle' => 'Controle Financeiro',
                'basic_description' => 'Sistema de controle financeiro que facilita a gestão de contas, receitas e despesas com categorias personalizáveis, integrações bancárias, e dicas financeiras baseadas em comportamento.',
                'description' => '
                    <p>
                        <strong>Poupe+</strong> é um aplicativo de controle financeiro projetado para ajudar os usuários a gerenciar suas finanças de maneira clara e fácil. O app é ideal para quem busca ter um controle detalhado de suas contas, receitas e despesas, proporcionando uma visão abrangente da saúde financeira pessoal.
                    </p>
                    <p>
                        Com o Poupe+, os usuários podem lançar receitas e despesas, categorizando-os por tipo e conta, o que facilita a organização e o acompanhamento dos gastos. O app oferece uma visão atual do balanço financeiro, histórico de transações e projeções futuras, ajudando na tomada de decisões financeiras informadas.
                    </p>
                    <p>
                        O aplicativo também permite a criação de categorias personalizadas para melhor organização dos gastos e entradas. Além disso, possui integração com arquivos de extratos bancários, simplificando a entrada de dados e garantindo uma atualização precisa das finanças.
                    </p>
                    <p>
                        Além da interface mobile, o Poupe+ conta com uma aplicação web que oferece funcionalidade completa para o gerenciamento financeiro. O app ainda fornece dicas financeiras periódicas baseadas nas tendências de consumo e objetivos de gestão dos usuários, promovendo educação e melhoria contínua na administração das finanças.
                    </p>',
                'situation' => 'developing',
                'slug' => 'poupe-mais-controle-financeiro',
                'project_type' => 'Own',
            ]
        );

        $php = Skills::where('name', 'ilike', 'PHP')->first();
        $laravel = Skills::where('name', 'ilike', 'Laravel')->first();
        $javascript = Skills::where('name', 'ilike', 'JavaScript')->first();
        $vue = Skills::where('name', 'ilike', 'Vue')->first();
        $postgress = Skills::where('name', 'ilike', 'PostgreSQL')->first();
        $git = Skills::where('name', 'ilike', 'Git')->first();
        $bootstrap = Skills::where('name', 'ilike', 'Bootstrap')->first();
        $typescript = Skills::where('name', 'ilike', 'Typescript')->first();
        $nodeJs = Skills::where('name', 'ilike', 'Nodejs')->first();
        $typescript = Skills::where('name', 'ilike', 'Typescript')->first();
        $mongoDb = Skills::where('name', 'ilike', 'MongoDB')->first();
        $reactNative = Skills::where('name', 'ilike', 'React Native')->first();
        $angular = Skills::where('name', 'ilike', 'Angular')->first();
        $rabbitMq = Skills::where('name', 'ilike', 'RabbitMQ')->first();
        $redis = Skills::where('name', 'ilike', 'Redis')->first();
        $powerBi = Skills::where('name', 'ilike', 'Power BI')->first();
        $react = Skills::where('name', 'ilike', 'React')->first();

        ProjectSkills::truncate();  

        foreach([$laravel, $vue, $postgress, $php, $javascript, $git, $bootstrap] as $index => $skill) {
            ProjectSkills::create(
                [
                    'project_id' => $Twinsys->id,
                    'skill_id' => $skill->id,
                    'order' => $index + 1
                ]
            );
        }

        foreach([$nodeJs, $typescript, $angular, $reactNative, $mongoDb, $git] as $index => $skill) {
            ProjectSkills::create(
                [
                    'project_id' => $FarrigaTec->id,
                    'skill_id' => $skill->id,
                    'order' => $index + 1
                ]
            );
        }

        foreach([$nodeJs, $angular, $typescript, $reactNative, $mongoDb, $rabbitMq, $postgress, $redis] as $index => $skill) {
            ProjectSkills::create(
                [
                    'project_id' => $MySchedule->id,
                    'skill_id' => $skill->id,
                    'order' => $index + 1
                ]
            );
        }

        foreach([$nodeJs, $react, $reactNative, $typescript, $mongoDb, $rabbitMq, $postgress, $redis, $powerBi] as $index => $skill) {
            ProjectSkills::create(
                [
                    'project_id' => $PoupeMais->id,
                    'skill_id' => $skill->id,
                    'order' => $index + 1
                ]
            );
        }
        
        ProjectImages::truncate();

        $imagensTwin = [
            'https://res.cloudinary.com/devy77u3i/image/upload/v1726094019/twin_logo_eutzr1.jpg',
        ];

        foreach($imagensTwin as $index => $url) {
            ProjectImages::create(
                [
                    'project_id' => $Twinsys->id,
                    'image_url' => $url,
                    'order' => $index + 1,
                    'is_cover' => $index === 0
                ]
            );
        }
    }
}
