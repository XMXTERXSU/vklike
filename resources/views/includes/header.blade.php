<header class="py-3 border-bottom">
    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                {{ config('app.name') }}
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a href="{{ route('posts.index') }}" class="nav-link {{ active_link('posts*') }}"
                            aria-current="page">
                            {{ __('Посты') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('groups.index') }}" class="nav-link ">
                            {{ __('Сообщества') }}
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    @if (!Auth::check())
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link {{ active_link('register') }}"
                                aria-current="page">
                                {{ __('Регистрация') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link {{ active_link('login') }}">
                                {{ __('Вход') }}
                            </a>
                        </li>
                    @else
                        <li class="nav-item">

                            <x-form action="{{ route('logout') }}" method="POST">
                                <x-input-submit type="submit" >
                                    {{-- {{ __('Выход') }} --}}
                                </x-button>
                                {{-- <a href="{{ route('logout') }}" class="nav-link" type="submit">
                                    {{ __('Выход') }}
                                </a> --}}
                            </x-form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
