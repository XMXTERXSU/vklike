@extends('layouts.main')

@section('page.title', 'Создать пост')

@section('main.content')
    <x-title>
        {{ __('Создать сообщество') }}
        <x-slot name="link">
            <a href="{{ route('user.group.index') }}">
                {{ __('Назад') }}
            </a>
        </x-slot>
    </x-title>

    <x-post.form action="{{ route('user.group.store') }}" method="post">
        <x-button type="submit">
            {{__("Создать сообщество")}}
        </x-button>
    </x-post.form>
@endsection



