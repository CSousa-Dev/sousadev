<a 
    class="link-button" href= {{$href}} 
    @isset($id)
    id="{{ $id }}"
    @endisset($id) 
    target="_blank">
    {{ $slot }}
</a>