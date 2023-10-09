@extends('layouts.main')

@section('page.title', $user->name)

@section('main.content')
    <x-title>
        {{ $user->name }}
    </x-title>

    @if ($posts->isEmpty())
        {{ __('У этого пользователя еще нет постов') }}
    @else
        <div class="row">

            @foreach ($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post" />
                </div>
                {{-- <div class="mb-3">
                <h2 class="h6">
                    <a href="{{route('user.posts.show', $post->id)}}">
                        {{$post->title}}
                    </a>
                </h2>

                <div class="small text-muted">
                    {{ $post->published_at?->format('d.m.Y')}}
                </div>
            </div> --}}
            @endforeach
        </div>
        {{ $posts->links() }}
    @endif
@endsection
