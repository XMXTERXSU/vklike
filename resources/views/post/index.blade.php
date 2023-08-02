@extends('layouts.main')

@section('page.title', 'Лента')

@section('main.content')
    <x-title>
        {{ __('Список постов') }}
    </x-title>

    @include('post.filter')

    @if (empty($posts))
        {{ __('Здесь еще нет постов') }}
    @else
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post" />
                </div>
            @endforeach
        </div>

        {{ $posts->links() }}
    @endif
@endsection
