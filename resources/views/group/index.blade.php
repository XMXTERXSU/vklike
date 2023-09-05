@extends('layouts.main')

@section('page.title', 'Сообщества')

@section('main.content')
    <x-title>
        {{ __('Список сообществ') }}
    </x-title>

    {{-- @include('post.filter') --}}

    @if ($groups->isEmpty())
        {{ __('Здесь еще нет групп') }}
    @else
        <div class="row">
            @foreach ($groups as $group)
                <div class="col-12 col-md-4">
                    <x-group.card :group="$group" />
                </div>
            @endforeach
        </div>

        {{-- {{ $group->links() }} --}}
    @endif
@endsection
