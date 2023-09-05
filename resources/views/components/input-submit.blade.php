@props(['value' => ''])
{{-- {{ $value }} --}}
<input {{ $attributes->class([
    'form-control'
])->merge([
    'type' => 'sumbit',
    'value' => 'Выход'
]) }}>
