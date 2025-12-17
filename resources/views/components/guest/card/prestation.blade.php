@props([
    'title',
    'description',
    'icon' => 'briefcase',
    'iconColor' => 'primary',
    'badges' => [],
    'link' => null,
])

@php
    $bgColorMap = [
        'primary' => 'bg-primary',
        'secondary' => 'bg-warning',
        'success' => 'bg-success',
        'danger' => 'bg-danger',
        'info' => 'bg-info',
    ];
    $iconBgClass = $bgColorMap[$iconColor] ?? 'bg-primary';
@endphp

<div class="memp-card memp-card-prestation" {{ $attributes }}>
    <div class="prestation-icon-wrapper">
        <div class="prestation-icon {{ $iconBgClass }} text-white">
            <x-guest.icon :name="$icon" size="xl" />
        </div>
    </div>
    <div class="prestation-body">
        <h4 class="prestation-title">{{ $title }}</h4>
        <p class="prestation-description">{{ $description }}</p>

        @if(count($badges) > 0)
            <div class="mb-3 d-flex flex-wrap gap-2">
                @foreach($badges as $badge)
                    <x-guest.badge
                        :variant="$badge['variant'] ?? 'primary'"
                        :icon="$badge['icon'] ?? null"
                    >
                        {{ $badge['label'] }}
                    </x-guest.badge>
                @endforeach
            </div>
        @endif

        @if(isset($slot) && !empty(trim($slot)))
            {{ $slot }}
        @endif

        @if($link)
            <x-guest.button
                :href="$link"
                variant="outline-{{ $iconColor }}"
                size="sm"
                icon="file"
            >
                Voir les détails
            </x-guest.button>
        @endif
    </div>
</div>
