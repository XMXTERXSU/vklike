@props(['post' => null])

<x-form {{ $attributes }}>
    <x-form-item>
        <x-label required>
            {{ __('Название сообщества') }}
        </x-label>
        <x-input name="title" value="{{ $group->title ?? '' }}" autofocus />
        <x-error name="title" />
    </x-form-item>


    <x-form-item>
        <x-label required>
            {{ __('Описание сообщества') }}
        </x-label>
        <x-trix name="description" value="{{ $group->description ?? '' }}" />
        <x-error name="description" />
    </x-form-item>

    {{ $slot }}

</x-form>
