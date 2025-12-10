@props([
    'title' => '',
    'value' => '0',
    'icon' => 'trending-up',
    'trend' => null,
    'trendLabel' => '',
    'variant' => 'primary' // primary, success, warning, danger
])

<div class="stat-card stat-card-{{ $variant }}">
    <div class="stat-card-header">
        <div class="stat-card-title">{{ $title }}</div>
        <div class="stat-card-icon">
            <i data-lucide="{{ $icon }}" width="24" height="24"></i>
        </div>
    </div>
    <div class="stat-card-value">{{ $value }}</div>
    @if($trend !== null || $trendLabel)
        <div class="stat-card-footer">
            @if($trend !== null)
                <span class="stat-card-trend {{ $trend >= 0 ? 'trend-up' : 'trend-down' }}">
                    <i data-lucide="{{ $trend >= 0 ? 'trending-up' : 'trending-down' }}" width="14" height="14"></i>
                    {{ abs($trend) }}%
                </span>
            @endif
            @if($trendLabel)
                <span>{{ $trendLabel }}</span>
            @endif
        </div>
    @endif
</div>
