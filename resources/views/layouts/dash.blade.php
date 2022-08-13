<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="{{ config('app.name')}}">
    <meta name="description" content="Mexican | Fast-Food | Italian | Chicken-Takeaway in Westcliff-On-Sea, London">
    <meta name="keywords" content="Mexican, Italian, Chicken, Fast-Food">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FF5C5C">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#FF5C5C">

    <title>{{ config('app.name')}}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>


    @livewireStyles
</head>
<body>
<div x-data="{ sidebarOpen: true }" class="flex h-screen bg-gray-200 dark:bg-gray-900">
    @livewire('admin.components.sidebar')

    <div class="flex-1 flex flex-col overflow-hidden">
        @livewire('admin.components.header')

        <main class="flex-1 overflow-x-hidden overflow-y-auto">
            <div class="container mx-auto px-6 py-8">
                {{ $slot }}
            </div>


        </main>
    </div>
</div>


@stack('modals')

<!-- Scripts -->
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
@yield('jsAfterLoad')
</body>
</html>
