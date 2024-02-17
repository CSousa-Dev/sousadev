@php
    $class = "skills-carrousel-container-continuous swiper";
    $class = $attributes->get('class') ? $class . ' ' . $attributes->get('class') : $class;
@endphp

<div class="{{$class}}">
    <div class="swiper-wrapper">
        @foreach ($icons as $icon )
            <div class="swiper-slide">
                <x-skills.icon
                src="{{$icon['src']}}"
                title="{{$icon['title']}}"/>
            </div>
        @endforeach   
    </div>
    @isset($pagination)
        <div class="swiper-pagination"></div>        
    @endisset

</div>