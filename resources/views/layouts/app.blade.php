<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title')</title>
    <meta name="description" lang="{{ app()->getLocale() }}" content="@yield('meta_description')"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
<header>
    <div class="bg-gray-100">
        <div class="max-w-screen-lg mx-auto px-3 py-6">
            <div class="jsx-4057204961 flex flex-wrap justify-between items-center">
                <div class="jsx-4057204961">
                    <a class="jsx-4057204961" href="/">
                        <span class="text-gray-900 inline-flex items-center font-semibold text-2xl">
                            <svg class="text-primary-500 stroke-current mr-1" xmlns="http://www.w3.org/2000/svg"
                                 width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path>
                                <rect x="3" y="12" width="6" height="8" rx="1"></rect><rect
                                    x="9" y="8" width="6" height="12" rx="1"></rect><rect x="15" y="4" width="6" height="16" rx="1"></rect><path
                                    d="M4 20h14"></path></svg>RedirectInfo.com</span></a></div>

                <nav class="jsx-4057204961">
                    <ul class="jsx-4057204961 navbar flex items-center font-medium text-xl text-gray-800">
                        <li class="mr-10"><a href="/">Home</a></li>
                        <li class="mr-10"><a href="/web-servers/apache/">Apache Redirects</a></li>
                        <li class=""><a href="/web-servers/nginx/">NGiNX Redirects</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<main class="py-4">
    @yield('content')
</main>

<footer class="bg-gray-100">
    <div class="max-w-screen-lg mx-auto px-3 py-16">
        <div class="text-center">
            <span class="text-gray-900 inline-flex items-center font-semibold text-xl">
                <svg class="text-primary-500 stroke-current mr-1" xmlns="http://www.w3.org/2000/svg" width="32"
                     height="32" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M0 0h24v24H0z" stroke="none"></path>
                    <rect x="3" y="12" width="6" height="8" rx="1"></rect>
                    <rect x="9" y="8" width="6" height="12" rx="1"></rect>
                    <rect x="15" y="4" width="6" height="16" rx="1"></rect>
                    <path d="M4 20h14"></path>
                </svg>RedirectInfo.com</span>

            {{--            <nav>--}}
            {{--                <ul class="navbar mt-5 flex flex-row justify-center font-medium text-xl text-gray-800">--}}
            {{--                    <li><a href="#">Home</a></li>--}}
            {{--                    <li><a href="#">About</a></li>--}}
            {{--                    <li><a href="#">Docs</a></li>--}}
            {{--                </ul>--}}
            {{--            </nav>--}}

            <div class="mt-8 text-sm">
                <div class="footer-copyright">© Copyright {{ date('Y') }}</div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>



{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

{{--        <!-- Scripts -->--}}
{{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    </head>--}}
{{--    <body class="font-sans antialiased">--}}
{{--        <div class="min-h-screen bg-gray-100">--}}
{{--            @include('layouts.navigation')--}}

{{--            <!-- Page Heading -->--}}
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

{{--            <!-- Page Content -->--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
