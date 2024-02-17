@php
    $skills = [];

    foreach ($project->skills as $skill) {
        $skills[] = [
            "src" => $skill->skills->image_url,
            "title" => $skill->skills->name
        ];
    }

    $images = $project->images()->orderBy('order')->pluck('image_url')->toArray();
@endphp

<x-layouts.layout
    description="{{$project->basic_description}}"
    title="SousaDev {{$project->title}}">
    <main> 
        <section id='project' class="m-b-4">
            <h1 class="text-lg bold m-b-2 secondary">
                {{$project->title}}
                <br><span class="bold tertiary">{{$project->subtitle}}</span>
            </h1>
            <div class='description-wrapper m-b-1'>
                <x-description.simple
                    :description="$project->description"
                />
                <div class="img-wrapper">
                    @if ($project->situation == 'done')
                        <p>Sistema Finalizado</p>
                        <img
                            src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731352/done_rtx53q.svg"
                        >
                    @endif

                    @if ($project->situation == 'developing')
                        <p>Sistema em desenvolvimento</p>
                        <img
                            src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731352/in-progress_pny9py.svg"
                    >
                    @endif
                    @if ($project->situation == 'running')
                        <p>Sistema em produção</p>
                        <img
                            src="https://res.cloudinary.com/devy77u3i/image/upload/v1726026986/Product_iteration-amico_ax9fa9.svg"
                    >
                    @endif
                </div>
            </div>
            
            <div class='links m-b-3'>
                @if($project->project_url)
                    <a href="{{$project->project_url}}" target="_blank">Acessar o site</a>
                @endif

                @if($project->company_url)
                    <a href="{{$project->company_url}}" target="_blank">Acessar o site da empresa</a>
                @endif

                @if($project->app_url)
                    <a href="{{$project->app_url}}" target="_blank">Fazer download do app</a>
                @endif

                @if($project->repository_url)
                    <a href="{{$project->repository_url}}" target="_blank">Ver o código fonte</a>
                @endif
            </div>
            <h2 class="text-sm x-bold secondary m-y-1 animate fade-in from-left">
                Tecnologias e <span class="text-sm x-bold tertiary">Ferramentas</span>
            </h2>
            <x-carrousel.skills
                class="swiper m-b-3 animate fade-in"
                :icons="$skills"
            />
            @if($images)
            <h2 class="text-md x-bold secondary m-y-1 animate fade-in from-left">Galeria <span class="text-md x-bold tertiary">De imagens</span>
            </h2>
            <x-carrousel.coverflow
                class="swiper m-b-4 animate fade-in"
                :assets="$images"
                pagination="true"
            />
            @endif

            @if(!$images)
            <h2 class="text-md x-bold secondary m-y-1 animate fade-in from-left">Galeria <span class="text-md x-bold tertiary">De imagens</span>
            </h2>
            <x-carrousel.coverflow
                class="swiper m-b-4 animate fade-in no-image"
                :assets="[]"
                pagination="true"
                no-image
            />  
            @endif
        </section>
        <x-sections.contactUs/>
    </main>
</x-layouts.layout>