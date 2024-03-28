<x-layouts.layout
    title="SousaDev Home"
>
    <section id="presentation"    
    aria-label="Apresentação"
    >
        <img class="light top"
        src="{{asset('images/Ponto de Luz.png')}}"
        >
        <img class="light bottom"
        src="{{asset('images/Ponto de Luz Bottom.png')}}"
        >

        <div class='text-content'>
            <p>Olá, eu sou!</p>
            <h2>Renato Sousa</h2>
            <h1>Desenvolvedor de Software</h1>
            <p>Tornando melhor o dia a dia de pessoas e negócios através da tecnologia.
            </p>
            <div class=buttons-wrapper>
                <x-buttons.LinkButton
                    class="btn-presentation" 
                    href="www.google.com">
                    Saiba mais
                </x-buttons.LinkButton>
                <x-buttons.LinkButton 
                    class=" btn-presentation" 
                    href="www.google.com">
                    Contato
                </x-buttons.LinkButton>
            </div>
        </div>
        <img src="{{asset('images/Group 1.png')}}" alt="Imagem de exemplo">
    </section>
    
</x-layouts.layout>