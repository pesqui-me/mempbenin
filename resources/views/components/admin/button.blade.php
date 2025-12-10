@props([
    'variant' => 'primary', // primary, success, danger, outline, ghost
    'icon' => null,
    'iconOnly' => false,
    'href' => null
])

@php
    $classes = 'btn btn-' . $variant;
    if ($iconOnly) {
        $classes .= ' btn-icon';
    }
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon)
            <i data-lucide="{{ $icon }}" width="18" height="18"></i>
        @endif
        @if(!$iconOnly)
            <span>{{ $slot }}</span>
        @endif
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes, 'type' => 'button']) }}>
        @if($icon)
            <i data-lucide="{{ $icon }}" width="18" height="18"></i>
        @endif
        @if(!$iconOnly)
            <span>{{ $slot }}</span>
        @endif
    </button>
@endif
