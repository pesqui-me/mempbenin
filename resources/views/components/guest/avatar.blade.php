@props([
    'src' => null,
    'alt' => '',
    'size' => 'md',
    'circle' => false,
    'bordered' => false,
    'initials' => null,
])

@php
    $classes = "memp-avatar memp-avatar-{$size}";
    if ($circle) $classes .= ' memp-avatar-circle';
    if ($bordered) $classes .= ' memp-avatar-bordered';
    $classes .= ' ' . ($attributes->get('class') ?? '');
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($src)
        <img src="{{ $src }}" alt="{{ $alt }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="memp-avatar-placeholder" style="display: none;">
            @if($initials)
                {{ $initials }}
            @else
                <x-guest.icon name="user" />
            @endif
        </div>
    @else
        <div class="memp-avatar-placeholder">
            @if($initials)
                {{ $initials }}
            @else
                <x-guest.icon name="user" />
            @endif
        </div>
    @endif
</div>
