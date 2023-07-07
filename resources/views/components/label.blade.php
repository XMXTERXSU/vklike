@props(['required'])


<label {{ $attributes->class(['mb-2', $required ? 'required' : '']) }}>
    {{ $slot }}
</label>
