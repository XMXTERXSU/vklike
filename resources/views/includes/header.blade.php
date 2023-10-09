<header class="border-bottom">
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
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <button class="btn dropdown-toggle hidden-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Профиль</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <x-form action="{{ route('logout') }}" method="POST">
                                                    <x-input-submit class="" type="submit">
                                                        {{ __('Выход') }}
                                                    </x-input-submit>
                                                </x-form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
