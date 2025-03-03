<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="img/logo.png" sizes="48x48" type="image/x-icon" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
    /* Simple Navbar Styles */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .navbar {
        background-color: #343a40;
        color: white;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        margin: 0 10px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .navbar a:hover {
        background-color: #495057;
    }

    .navbar .brand {
        font-size: 24px;
        font-weight: bold;
    }

    /* Responsive Navbar (mobile) */
    .navbar-toggler {
        display: none;
    }

    @media screen and (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar a {
            padding: 8px 10px;
        }

        .navbar-toggler {
            display: block;
            background-color: #495057;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            text-align: left;
        }

        .navbar-menu {
            display: none;
            width: 100%;
        }

        .navbar.open .navbar-menu {
            display: block;
        }
    }
    </style>

    @livewireStyles
</head>

<body class="font-sans antialiased">

    <!-- Simple Navbar -->
    <nav class="navbar" id="navbar">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" id="navbar-toggler">☰</button>


        <div class="navbar-menu">
            <a href="/">{{ __('message.home') }}</a>
            <a href="{{ route('About') }}">{{ __('message.about') }}</a>
            <a href="{{ route('Contact') }}">{{ __('message.Contact') }}</a>
            <a href="{{ route('Service') }}">{{ __('message.Service') }}</a>
            @auth
                <!-- User is logged in -->
                <a href="{{ route('dashboard') }}">{{ __('message.dashboard') }}</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <!-- User is not logged in -->
                <a href="{{ route('login') }}">{{ __('login') }}</a>
            @endauth
        </div>

    </nav>
    <div class="language-control">
    <div class="location">
    <h3>
            Select your language
        </h3>
        <h4 id="location">
            User Location
        </h4>
    </div>    
  
        <form action="{{ route('lang.change') }}" method="GET">
            <select name="lang" onchange="this.form.submit()">
                <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="fr" {{ session('locale') == 'fr' ? 'selected' : '' }}>French</option>
                <option value="es" {{ session('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
            </select>
        </form>

    </div>


    @stack('modals')

    @livewireScripts

    <script>
    // Toggle Navbar Menu for Mobile
    const navbarToggler = document.getElementById('navbar-toggler');
    const navbar = document.getElementById('navbar');

    navbarToggler.addEventListener('click', function() {
        navbar.classList.toggle('open');
    });
    </script>

</body>

</html>