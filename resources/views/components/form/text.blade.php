@php
/**
props
    label
    name
    type
    name
    placeholder
    required
    autofocus
    help
**/
@endphp

@if(!isset($label))
    @php
        $label = \Illuminate\Support\Str::ucfirst(implode(' ', explode('_', $name)))
    @endphp
@endif

<label for="{{ $name }}">{{ $label }}</label>
<input
    type="{{ $type ?? 'text' }}"
    {{ isset($type) && $type === 'textarea' ? "cols=15 rows=10": '' }}
    class="{{$class ?? 'form-input'}} {{ $errors->has($name) ? 'is-invalid': '' }} {{ old($name) && !$errors->has($name) ? 'is-valid': '' }}"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $resource->{$name} ?? null }}"
    aria-describedby="{{ $name }}"
    placeholder="{{ $placeholder ?? "Enter $name" }}"
    value="{{ $oldValue ?? old($name) }}"
    {{ ($required ?? null) ? 'required' : '' }}
    {{ ($autofocus ?? null) ? 'autofocus' : '' }}
>
<div class="invalid-feedback">{{ $errors->has($name) ? $errors->first($name) : ''}}</div>
@isset($help)
    <small id="{{ $name }}" class="form-text text-grey">{{ $help }}</small>
@endisset