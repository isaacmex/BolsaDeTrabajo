@php
    $classes="underline text-sm text-gray-688 hover:text-gray-900"  
@endphp
<a {{$attributes->merge(['class'=> $classes]) }}>    
    {{ $slot }}
</a>
