@props(['title', 'subtitle' => null])

<div class="memp-page-title">
    <h2>{{ $title }}</h2>
    <div class="title-divider"></div>
    @if($subtitle)
        <p class="subtitle">{{ $subtitle }}</p>
    @endif
    @if(isset($slot) && !empty(trim($slot)))
        <div class="mt-3">
            {{ $slot }}
        </div>
    @endif
</div>
