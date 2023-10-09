@extends('layouts.main')

@section('page.title', 'Мои посты')

@section('main.content')
    <x-title>
        <x-slot name="link">
            <a href="{{route('user.profile')}}">
            {{ __("Назад") }}
            </a>
        </x-slot>


        <x-slot name="right">
            <x-button-link href="{{route('user.posts.edit', $post->id)}}">
            {{ __("Изменить") }}
            </x-button-link>
        </x-slot>
    </x-title>

    <h2 class="h4">
        {{ $post->title }}
    </h2>

    <div class="small text-muted">
        {{ now()->format('d.m.Y') }}
    </div>

    <div class="pt-3">
        {!! $post->content !!}
    </div>
@endsection
