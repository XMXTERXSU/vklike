@extends('layouts.main')

@section('page.title', 'Мои посты')

@section('main.content')
    <x-title>
        {{ $user->name }}
        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.create') }}">
                {{ __('Создать')}}
            </x-button-link>
        </x-slot>
    </x-title>

    @if ($posts->isEmpty())
        {{ __('У вас еще нет постов') }}
    @else
        @foreach ($posts as $post)
            <div class="mb-3">
                <h2 class="h6">
                    <a href="{{route('user.posts.show', $post->id)}}">
                        {{$post->title}}
                    </a>
                </h2>

                <div class="small text-muted">
                    {{ $post->published_at?->format('d.m.Y')}}
                </div>
            </div>
        @endforeach
            {{ $posts->links() }}
    @endif
@endsection
