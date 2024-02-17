<section>
    @foreach ($projects as $project)
    <x-card.project
        class="m-b-3 animate fede-in from-left"
        :project="$project"
    />
    @endforeach 
</section>