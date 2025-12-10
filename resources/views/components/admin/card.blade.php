@props([
    'title' => null,
    'elevated' => false,
    'hover' => false
])

<div {{ $attributes->merge(['class' => 'card' . ($elevated ? ' card-elevated' : '') . ($hover ? ' card-hover' : '')]) }}>
    @if($title || isset($actions))
        <div class="card-header">
            @if($title)
                <h3 class="card-title">{{ $title }}</h3>
            @endif
            @isset($actions)
                <div class="card-actions">
                    {{ $actions }}
                </div>
            @endisset
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset
</div>
