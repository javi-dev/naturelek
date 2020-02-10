<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="hidden mb-1 bg-gray-200 shadow lg:block">
        @include('layouts.website.partials.menus.top')

        <h2 class="hidden text-6xl font-semibold tracking-tighter text-center text-gray-900 lg:block">Naturelek</h2>

        @include('layouts.website.partials.menus.bottom')
    </div>

    <div x-data="{ open: false }" class="sticky top-0 w-full mb-1 text-lg whitespace-no-wrap shadow lg:hidden" x-cloak>
        <div class="flex items-center justify-between px-8 py-4 bg-green-500">

            <a href="/" class="flex items-baseline">
                <svg class="w-16 h-16 text-gray-100 fill-current" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M11.92,19.86l.21-4a13.18,13.18,0,0,1-2.5.33c-2-.16-3.44-2-3.56-4.45-.08-1.4,0-2.82-.2-4.2a29.76,29.76,0,0,0-1.1-3.82c-.15-.46-.43-.87-.62-1.32-.27-.64-.7-1.33-.13-2A1.77,1.77,0,0,1,6.16.27,9.9,9.9,0,0,1,8.67,1.74c2,1.88,4,3.86,5.92,5.84a6.2,6.2,0,0,1,.88,1.28c1.29,2.29,1.07,4-1.18,5.35A3.2,3.2,0,0,0,12.46,18a5.17,5.17,0,0,1,0,1.47,2.16,2.16,0,0,1-.31.58Zm.37-5c2.65-.71,3.68-2.71,2.67-5.1a4.59,4.59,0,0,0-.24-.5A20.4,20.4,0,0,0,7.3,1.53,4.92,4.92,0,0,0,5.77,1c-.55-.12-.9.16-.76.76a16.89,16.89,0,0,0,.58,1.83,15.86,15.86,0,0,1,1.12,6.88,6.51,6.51,0,0,0,0,1.65c.4,2.16,1.87,4.18,4.53,3.28.53-.17.77-.42.67-1-.14-.81-.24-1.62-.37-2.44h.15Z" />
                </svg>
                <span class="ml-2 text-4xl font-bold text-gray-100">Naturelek</span>
            </a>

            <svg class="w-6 h-6 text-green-100 cursor-pointer fill-current hover:text-green-900"
                x-bind:class="{ 'invisible': open }" @click="open = true" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </div>

        @include('layouts.website.partials.menus.mobile')
    </div>

    @yield('content')

    @include('layouts.website.partials.footer')

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>