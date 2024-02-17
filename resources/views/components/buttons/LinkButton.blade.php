@if(isset($outlined)) 
    <div class="outline @isset($class) {{$class}} @endisset">
        <a 
            class="link-button @isset($insideClass) {{$insideClass}} @endisset outlined"
            href= {{$href}} 
            @isset($id)
            id="{{ $id }}"
            @endisset($id) 
            target="_blank">
            {{ $slot }}
        </a>
    </div>
@else 
    <a 
        class="link-button @isset($class) {{$class}} @endisset($id) @isset($outlined) outlined @endisset"
        href= {{$href}} 
        @isset($id)
        id="{{ $id }}"
        @endisset($id) 
        target="_blank">
{{ $slot }}
    </a> 
@endif