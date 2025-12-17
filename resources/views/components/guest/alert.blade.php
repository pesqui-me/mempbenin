@props([
    'variant' => 'primary',
    'icon' => null,
    'title' => null,
])

@php
    $classes = "memp-alert memp-alert-{$variant}";
    $classes .= ' ' . ($attributes->get('class') ?? '');
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($icon)
        <div class="memp-alert-icon">
            <x-guest.icon :name="$icon" size="lg" />
        </div>
    @endif
    <div class="memp-alert-content">
        @if($title)
            <h5>{{ $title }}</h5>
        @endif
        {{ $slot }}
    </div>
</div>
