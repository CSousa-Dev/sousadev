<x-layouts.layout
    description="Conheça a seleção de nossos projetos e soluções tecnológicas inovadoras e eficazes. Acompanhe os projetos na integra e tenha insights sobre como podemos ajudar a sua empresa."
    title="SousaDev Projetos"
>
    <main id="projects-page">
        <section id="projects" class="m-b-3">
            <h1 class="text-md x-bold secondary m-b-1 animate fade-in">
                Galeria
                <br><span class="text-md x-bold tertiary">De Projetos</span>
            </h1>
            @include("sections.projects.list", ['projects' => $projects])
        </section>
        <x-sections.contactUs/>
    </main>
</x-layouts.layout>