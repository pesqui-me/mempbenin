@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
    'icon' => null,
    'iconPosition' => 'left',
])

@php
    $classes = "memp-btn memp-btn-{$variant}";

    if ($size !== 'md') {
        $classes .= " memp-btn-{$size}";
    }

    $classes .= ' ' . ($attributes->get('class') ?? '');
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'left')
            <x-guest.icon :name="$icon" />
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <x-guest.icon :name="$icon" />
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'left')
            <x-guest.icon :name="$icon" />
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <x-guest.icon :name="$icon" />
        @endif
    </button>
@endif
