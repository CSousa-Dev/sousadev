@props([
    'titleFirstLine' => '', 
    'titleSecondLine' => '', 
    'title' => '', 
    'description' => '', 
    'imagePath' => '', 
    'imageAltText' => '', 
    'element' => 'div', 
    'titleType' => 'simple-with-dash', 
    'descriptionType' => 'simple', 
    'invertXImage' => false, 
    'orientation' => 'left-to-right', 
    'textWrapperClass' => '', 
    'titleClass' => '', 
    'descriptionClass' => ''
    ]
)

@php 
    $titleComponents = [
        'simple-with-dash' => 'title.simpleWithDash',
        'double-line' => 'title.doubleLine',
        'two-colors' => 'title.twoColors',
    ];

    $descriptionComponents = [
        'simple' => 'description.simple',
    ];

    $textWrapperClass .= ' text-wrapper ';
    if($orientation == 'right-to-left')
        $textWrapperClass .= ' right-to-left';

@endphp

<{{$element}} {{$attributes->merge(['class' => 'title-description-and-image'])}}>
    <div 
        class="{{$textWrapperClass}}"
    >
        <x-dynamic-component 
            :component="$titleComponents[$titleType]"
            :title="$title"
            :firstLine="$titleFirstLine"
            :secondLine="$titleSecondLine"
            class="{{isset($titleClass) ? $titleClass : ''}}"    
        />

        <x-dynamic-component 
            :component="$descriptionComponents[$descriptionType]"
            :description="$description"
            class="{{isset($descriptionClass) ? $descriptionClass : ''}}"
        />
    </div>
    <div
        class="image-wrapper" 
    >
        <img 
            src="{{asset($imagePath)}}" alt="{{ $imageAltText }}"
        />
    </div>
</{{$element}}>