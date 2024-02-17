<div class="card-project {{$class ?? ''}}">
    <img class="light top"
    src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/Ponto_de_Luz_e3aoeu.png"
    >
    <img class="light bottom"
    src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/Ponto_de_Luz_Bottom_n0zafb.png"
    >
    <div class="card-project-content">
        <div class="card-project-content-text">
            <p class="card-project-content-title">{{$project->title}}</p>
            <p class="card-project-content-description">{{$project->basic_description}}</p>
        </div>

        <x-buttons.LinkButton
            class="btn-project"
            href="/projeto/{{$project->slug}}"
            outlined
            >
            Saiba mais
        </x-buttons.LinkButton>
    </div>
    <div class="card-project-technologies">
        @foreach ($project->skills()->limit(3)->get() as $projectSkill)
            <x-skills.icon
                src="{{$projectSkill->skills->image_url}}"
                title="{{$projectSkill->skills->name}}"
            />
        @endforeach
    </div>
    @if(isset($project->getCoverImage()->image_url))
        <div class="card-project-image">
            <img class="card-project-image"
                src="{{$project->getCoverImage()->image_url}}"
            >
        </div>
    @else
        <div class="card-project-image no-image">
            <p>Projeto em desenvolvimento</p>
            <p>Em breve teremos imagens</p>
            <img src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731356/under-construction_hwmtrs.svg" />
        </div>
    @endif
</div>