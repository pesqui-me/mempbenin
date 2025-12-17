@props([
    'label' => null,
    'name',
    'type' => 'text',
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'error' => null,
    'help' => null,
])

@php
    $inputClasses = 'memp-form-input';
    if ($error) $inputClasses .= ' is-invalid';
    $inputClasses .= ' ' . ($attributes->get('class') ?? '');
@endphp

<div class="memp-form-group">
    @if($label)
        <label for="{{ $name }}" class="memp-form-label">
            {{ $label }}
            @if($required)
                <span class="required">*</span>
            @endif
        </label>
    @endif

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $inputClasses]) }}
    >

    @if($error)
        <span class="memp-form-error">{{ $error }}</span>
    @elseif($help)
        <span class="memp-form-help">{{ $help }}</span>
    @endif
</div>
