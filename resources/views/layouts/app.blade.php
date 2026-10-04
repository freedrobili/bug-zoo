<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Локальная площадка с живыми багами интерфейса, логики и форм.">
    <title>@yield('title', config('app.name'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=syne:600,700,800|outfit:400,500,600" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .mast__nav { display: flex; gap: 1rem; margin: 1rem 0; flex-wrap: wrap; }
    </style>
</head>
<body class="zoo">
    <div class="zoo-grain" aria-hidden="true"></div>
    <svg class="zoo-orbits" aria-hidden="true" viewBox="0 0 1200 400" preserveAspectRatio="none">
        <ellipse cx="180" cy="40" rx="280" ry="160" fill="none" stroke="currentColor" stroke-width="1"/>
        <ellipse cx="1040" cy="80" rx="320" ry="200" fill="none" stroke="currentColor" stroke-width="1"/>
        <circle cx="210" cy="48" r="4" fill="currentColor"/>
        <circle cx="980" cy="30" r="3" fill="currentColor"/>
    </svg>

    <a class="skip" href="#exhibits">К вольерам</a>

    <header class="mast">
        <div class="mast__brand">
            <svg class="mast__mark" viewBox="0 0 48 48" aria-hidden="true">
                <rect x="4" y="4" width="40" height="40" rx="14" fill="none" stroke="currentColor" stroke-width="2"/>
                <path d="M14 30c4-10 16-10 20 0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="18" cy="20" r="2.2" fill="currentColor"/>
                <circle cx="30" cy="20" r="2.2" fill="currentColor"/>
            </svg>
            <div>
                <p class="mast__kicker">{{ config('app.name') }}</p>
                <p class="mast__sub">локальная лаборатория дефектов</p>
            </div>
        </div>
        <nav class="mast__nav">
            <a href="{{ route('zoo.index') }}" class="nav-link {{ request()->routeIs('zoo.index') ? 'active' : '' }}">Главная</a>
            <a href="{{ route('zoo.planets') }}" class="nav-link {{ request()->routeIs('zoo.planets') ? 'active' : '' }}">Планеты</a>
        </nav>
        <p class="mast__meta">
            @if(isset($bugs))
                офлайн · без ключей · {{ $bugs->count() }} вольеров
            @else
                офлайн · без ключей
            @endif
        </p>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="colophon">
        <p>Стенд для разбора багов на одном компьютере. Подключение и отдельный режим ведущего не нужны.</p>
    </footer>
</body>
</html>
