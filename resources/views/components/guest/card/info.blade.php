@props([
    'icon' => null,
    'title' => null,
    'variant' => 'primary',
])

@php
    $classes = "memp-card memp-card-info info-{$variant}";
    $classes .= ' ' . ($attributes->get('class') ?? '');
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="memp-card-body">
        @if($icon || $title)
            <div class="d-flex align-items-center mb-3">
                @if($icon)
                    <x-guest.icon :name="$icon" size="lg" class="text-{{ $variant }} me-3" />
                @endif
                @if($title)
                    <h5 class="mb-0">{{ $title }}</h5>
                @endif
            </div>
        @endif
        <div class="card-content">
            {{ $slot }}
        </div>
    </div>
</div>
