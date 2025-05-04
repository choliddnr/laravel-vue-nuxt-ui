@props([
    'disabled' => false,
    'tooltip',
    'label' => 'No Label',
])
@php
    $safelabel = strip_tags($label);
    $safestyledlabel = preg_replace('/\*(.*?)\*/', '<span class="font-bold">$1</span>', $safelabel);
@endphp
<div @class(['flex flex-row justify-start', 'text-gray-500' => $disabled])>
    @if ($disabled)
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 me-2">
            <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"
                clip-rule="evenodd" />
        </svg>
    @else
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 text-success me-2">
            <path fill-rule="evenodd"
                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                clip-rule="evenodd" />
        </svg>
    @endif
    @if (isset($tooltip))
        <div class="tooltip-trigger underline underline-offset-4 decoration-dashed" data-tooltip="{{ $tooltip }}">
            {!! $safestyledlabel !!}
        </div>
    @else
        <span>{!! $safestyledlabel !!}</span>
    @endif


</div>
