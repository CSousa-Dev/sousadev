<a 
    class="link-button @isset($class) $class @endisset($id)"
    href= {{$href}} 
    @isset($id)
    id="{{ $id }}"
    @endisset($id) 
    target="_blank">
    {{ $slot }}
</a>