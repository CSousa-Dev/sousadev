@php
    $class = $attributes->get('class') ?? '';
@endphp

<div class="simple-single-slide ' {{$class}}">
    <div class="swiper-wrapper">
        @foreach ($projects as $project )
            <div class="swiper-slide">
                <x-card.project
                    :project="$project"
                />
            </div>
        @endforeach   
    </div>
    @isset($pagination)
        <div class="swiper-pagination"></div>        
    @endisset

</div>