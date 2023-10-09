@extends('layouts.main')

@section('page.title', 'Изменить пост')

@section('main.content')
    <x-title>
        {{ __('Изменить пост') }}
        <x-slot name="link">
            <a href="{{ route('user.posts.show', $post->id) }}">
                {{ __('Назад') }}
            </a>
        </x-slot>
    </x-title>


    <x-post.form action="{{ route('user.posts.update', $post->id) }}" method="put" :post="$post">
        <x-button type="submit">
            {{ __('Сохранить') }}
        </x-button>
    </x-post.form>

    <x-form class="mt-2" action="{{ route('user.posts.destroy', $post->id) }}" method="delete" :post="$post">
        <x-button type="submit" color="danger">
            {{ __('Удалить') }}
        </x-button>
    </x-form>

@endsection
