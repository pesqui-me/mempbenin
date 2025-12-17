@props([
    'label' => null,
    'name',
    'options' => [],
    'value' => '',
    'placeholder' => 'Sélectionnez...',
    'required' => false,
    'error' => null,
    'help' => null,
])

@php
    $inputClasses = 'memp-form-select';
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

    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $inputClasses]) }}
    >
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>

    @if($error)
        <span class="memp-form-error">{{ $error }}</span>
    @elseif($help)
        <span class="memp-form-help">{{ $help }}</span>
    @endif
</div>
