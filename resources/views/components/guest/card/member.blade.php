@props([
    'name',
    'role',
    'avatar' => null,
    'bio' => null,
])

<div class="memp-card memp-card-member" {{ $attributes }}>
    <div class="member-avatar-wrapper">
        <x-guest.avatar
            :src="$avatar"
            :alt="$name"
            size="xl"
            circle
            bordered
            :initials="collect(explode(' ', $name))->map(fn($word) => substr($word, 0, 1))->join('')"
        />
    </div>
    <div class="member-info">
        <h3 class="member-name">{{ $name }}</h3>
        <p class="member-role">{{ $role }}</p>
        @if($bio)
            <p class="member-bio">{{ $bio }}</p>
        @endif
        @if(isset($slot) && !empty(trim($slot)))
            <div class="member-extra">
                {{ $slot }}
            </div>
        @endif
    </div>
</div>
