@props(['items' => []])

<div class="memp-breadcrumb">
    <ul>
        @foreach($items as $index => $item)
            @if($index > 0)
                <li class="separator">/</li>
            @endif
            <li class="{{ $item['active'] ?? false ? 'active' : '' }}">
                @if(isset($item['url']) && !($item['active'] ?? false))
                    <a href="{{ $item['url'] }}">
                        @if(isset($item['icon']))
                            <x-guest.icon :name="$item['icon']" />
                        @endif
                        {{ $item['label'] }}
                    </a>
                @else
                    @if(isset($item['icon']))
                        <x-guest.icon :name="$item['icon']" />
                    @endif
                    {{ $item['label'] }}
                @endif
            </li>
        @endforeach
    </ul>
</div>
