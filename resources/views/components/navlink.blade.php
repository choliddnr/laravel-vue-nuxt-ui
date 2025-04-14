@props(['active' => false, 'mobile' => false])
<a {{$attributes}} @class([
    'px-3 py-2 font-medium rounded-md',
    'text-sm' => !$mobile,
    'text-base block' => $mobile,
    'text-gray-300 hover:bg-gray-700
    hover:text-white' => !$active,
    ' bg-gray-900 text-white' => $active
])
    aria-current="{{$active ? 'page' : false}}">{{$slot}}</a>

{{-- aria-current="page" --}}