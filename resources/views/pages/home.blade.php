<x-layouts.layout
    description="Renato Sousa - Desenvolvedor de Software especializado em criar soluções tecnológicas inovadoras para otimizar negócios e melhorar a vida das pessoas. Explore meus projetos, certificações e saiba como posso contribuir para o sucesso do seu próximo desafio tecnológico."
    title="SousaDev - Soluções em Software"
>   
    <main id="home">

        <section id="presentation"    
            aria-label="Apresentação"
            class="m-b-2"
        >
            <img class="light top"
                src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/Ponto_de_Luz_e3aoeu.png"
            >
            <img class="light bottom"
                src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/Ponto_de_Luz_Bottom_n0zafb.png"
            >
    
            <div class='text-content animate fade-in'>
                <p>{{$presentation->gretting}}</p>
                <h2>{{$presentation->name}}</h2>
                <h1>{{$presentation->job_title}}</h1>
                <p>{{$presentation->motto}}</p>
                <div class=buttons-wrapper>
                    <x-buttons.LinkButton
                        class="btn-presentation"
                        href="/sobre" target="_blank">
                        Saiba mais
                    </x-buttons.LinkButton>
                    <x-buttons.LinkButton 
                        class=" btn-presentation"
                        href="/contato" target="_blank">
                        Contato
                    </x-buttons.LinkButton>
                </div>
            </div>
            <img class='photo-profile animate fade-in' src="{{$presentation->image_url}}" alt="imagem de perfil do possuidor do portfólio">
        </section>
    
        <section id='about-our-jobs'>
            <div class='text-wrapper'>
                <h2 class="text-md secondary x-bold animate fade-in from-left">{!!$services[0]->title!!}</h2>
                <p class="secondary animate fade-in">{!!$services[0]->description!!}</p>
            </div>
            <img class='image animate fade-in' src="{{$services[0]->image_url}}" alt="Imagem de colaboração entre pessoas para montagem de um site">
        </section>
    
        <section id="skills" class="m-b-3">
            <h2 class="text-sm x-bold secondary m-b-1 animate fade-in from-left">
                Tecnologias e <span class="text-sm x-bold tertiary">Ferramentas</span>
            </h2>
            <x-carrousel.skills
                class="swiper animate fade-in"
                :icons="$skills"
            />
        </section>
    
        <section id="projects" class="m-b-1">

            <h2 class="text-md x-bold secondary m-b-1 animate fade-in from-left">
                Conheça nossos
                <br><span class="text-md x-bold tertiary">Projetos em Destaque</span>
            </h2>
            <x-carrousel.highlightedProjects
                class="swiper animate fade-in"
                :projects="$highlightedProjects"
                pagination
            />
            <div class="more-projects">
                <img class='image animate fade-in' src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/Portfolio-amico_yzj7zd.svg" alt="Imagem de exemplo">
                <div>
                    <h2 class="text-md secondary x-bold m-b-1 animate from-right">Veja nosso 
                        <span class="text-md tertiary x-bold"> <br/>Portfólio completo</span>
                    </h2>
                    <p class="secondary animate fade-in">
                        Conheça mais projetos que desenvolvemos e como impactamos o dia a dia daqueles que confiam em nosso trabalho.
                    </p>    
                    <a href="/projetos" target="_blank" class="animate fade-in">Ver Portfólio</a>
                </div>
            </div>
        </section>
        <x-sections.contactUs/>
    </main>
</x-layouts.layout>