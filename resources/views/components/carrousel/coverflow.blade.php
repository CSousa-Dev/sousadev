@php
    $class = $attributes->get('class') ?? '';
@endphp

<div class="coverflow-carrousel-container ' {{$class}}">
    <!-- Additional required wrapper -->
    <img class="light top"
    src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/Ponto_de_Luz_e3aoeu.png"
    >
    <img class="light bottom"
    src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731354/Ponto_de_Luz_Bottom_n0zafb.png"
    >
    <div class="swiper-wrapper">
        @if($assets)
            @foreach ($assets as $asset )
                <div class="swiper-slide">
                    <div>
                        <img src="{{asset($asset)}}" />
                    </div>
                </div>
            @endforeach   
        @endif

        @if(!$assets)
            <div class="swiper-slide no-image">
                <p>Projeto em desenvolvimento</p>
                <p>Em breve teremos imagens</p>
                <img src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731356/under-construction_hwmtrs.svg" />
            </div>
        @endif
    </div>
    @isset($pagination)
        <div class="swiper-pagination"></div>        
    @endisset

</div>