@props(['active'=>false,'type'=>'a'])

@if($type==='a')
    <a
        class="block rounded-md {{$active? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  px-3 py-2 text-base font-medium"
        aria-current="{{$active?"page":"false"}}"
        {{
        $attributes}}
    >
        {{$slot}}
    </a>
@else
    <button
        class="block rounded-md {{$active? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  px-3 py-2 text-base font-medium"
        aria-current="{{$active?"page":"false"}}"
        {{
        $attributes}}
    >
        {{$slot}}
    </button>
@endif

