<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dumpling') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite([
        'resources/css/app.css',
        'resources/css/navbar.css', 
        'resources/css/homePage.css',
        'resources/css/publication.css',
        'resources/css/comment.css', 
        'resources/css/components.css', 
        'resources/css/footer.css',
        'resources/js/app.js', 
        'resources/sass/app.scss'
        ])

      </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.altNavigation')


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="w-50 m-auto mt-5">
            @if(Request::path() ==! "login" || Request::path() ==! "register")
                @include('components.translateButton')
            @elseif(Request::path() === "login" || Request::path() === "register")
                <img src="images/justDumplingLogo.svg" class="mb-4" alt="">
            @endif
                {{ $slot }}
            </main>
        </div>
        <script src="/js/app.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </body>
</html>
