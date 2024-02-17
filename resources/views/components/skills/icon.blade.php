<div 
    class="skill-icon 
        @isset($small) small @endisset
    ">
    @if(isset($title))
    <img src="{{asset($src)}}" alt="{{'icon-' . $title}}">
    <p>{{$title}}</p>
    @endif
    
    @if(!isset($title))
        <img src="{{asset($src)}}" alt="tec-icon">
    @endif    
</div>