<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: https://ogp.me/ns#" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="{{ config('app.name')}}">
    <meta name="description" content="Mexican | Fast-Food | Italian | Chicken-Takeaway in Westcliff-On-Sea, London">
    <meta name="keywords" content="Mexican, Italian, Chicken, Fast-Food">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FF5C5C">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#FF5C5C">

    <meta property="og:title" content="{{ config('app.name') }}@if(isset($title)) {{ "-".$title }}@endif "/>
    <meta property="og:type" content="Restaurant"/>
    <meta property="og:url" content="{{ config('app.url') }}"/>
    <meta property="og:image" content="{{ asset('img/logo3d.png') }}"/>
    <meta property="og:description"
          content="Mexican | Fast-Food | Italian | Chicken-Takeaway in Westcliff-On-Sea, London"/>

    <title>{{ config('app.name')}} @if(isset($title)){{ "-".$title }}@endif </title>

    <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "Restaurant",
    "name": "{{ config('app.name') }} ",
    "logo": [ "{{ asset('img/logo3d.png') }}" ],
    "url":  "http://crownrestairante.com",
    "slogan": "Mexican|Fast-Food|Italian-Takeaway",
    "hasMap": "https://goo.gl/maps/dMbPha53su2HvXL68",
    "founder": {
      "@type": "Person",
      "name": "{{ "Kalam Sarker" }}"
    },
    "keywords": "Mexican,Italian,Chicken,Fast-Food",
    "currenciesAccepted": "GBP",
    "paymentAccepted": "Credit Card, Cash",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "148 W 51st St Suit 42 Unit 7",
      "addressLocality": "Westcliff-on-Sea",
      "addressRegion": "Southend-on-Sea",
      "postalCode": "SS11PJ",
      "addressCountry": "UK"
      },
    "hasMenu":{
      "@type":"Menu",
      "url":"http://crownrestairante.com"
      },
     "servesCuisine": "Takeaway"
  }
    </script>

    <!-- Fonts -->


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>


    @livewireStyles

</head>
<body class="antialiased text-gray-800 dark:text-gray-200 ">
<x-jet-banner/>

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @livewire('guest.components.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow-md  rounded w-3/4 mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </header>
    @endif

    <div class="py-4">
        {{ $slot }}
    </div>
</div>
@livewire('guest.components.footer')
<!-- Botton to top button -->
<button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="inline-block p-3 bg-gradient-to-br from-pink-700 to-orange-400 hover:bg-gradient-to-bl bg-opacity-10 backdrop-blur-md hover:bg-opacity-95 text-white font-medium text-xs leading-tight uppercase rounded-full drop-shadow-xl focus:outline-none transition duration-150 ease-in-out bottom-5 right-5"
        id="btn-btm-to-top">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor"
              d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
    </svg>
</button>

@stack('modals')

<!-- Scripts -->
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
@yield('jsAfterLoad')

@include('cookie-consent::index')


<script>

    // Get the button
    var mybutton = document.getElementById("btn-btm-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 40 ||
            document.documentElement.scrollTop > 40
        )
        {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</body>

</html>
