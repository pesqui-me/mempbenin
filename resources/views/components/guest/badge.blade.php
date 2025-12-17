@props([
    'variant' => 'primary',
    'icon' => null,
])

@php
    $classes = "memp-badge memp-badge-{$variant}";
    $classes .= ' ' . ($attributes->get('class') ?? '');
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    @if($icon)
        <x-guest.icon :name="$icon" size="sm" />
    @endif
    {{ $slot }}
</span>
