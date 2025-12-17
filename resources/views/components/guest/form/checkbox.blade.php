@props([
    'label',
    'name',
    'value' => '1',
    'checked' => false,
    'required' => false,
])

<div class="memp-form-check">
    <input
        type="checkbox"
        class="memp-form-check-input"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ $value }}"
        {{ old($name, $checked) ? 'checked' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $attributes }}
    >
    <label for="{{ $name }}" class="memp-form-check-label">
        {!! $label !!}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
</div>
