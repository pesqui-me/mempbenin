@props([
    'label' => null,
    'name',
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'error' => null,
    'help' => null,
    'rows' => 4,
])

@php
    $inputClasses = 'memp-form-textarea';
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

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        rows="{{ $rows }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $inputClasses]) }}
    >{{ old($name, $value) }}</textarea>

    @if($error)
        <span class="memp-form-error">{{ $error }}</span>
    @elseif($help)
        <span class="memp-form-help">{{ $help }}</span>
    @endif
</div>
