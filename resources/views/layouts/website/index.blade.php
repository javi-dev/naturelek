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

<body class="bg-gray-200">
    @include('layouts.website.partials.menus.top')

    <h2 class="hidden text-6xl font-semibold text-center lg:block">Naturelek</h2>

    @include('layouts.website.partials.menus.bottom')

    <div x-data="{ open: false }" class="sticky top-0 w-full text-lg whitespace-no-wrap lg:hidden" x-cloak>
        <div class="flex justify-end px-8 py-4 bg-gray-200" x-bind:class="{ 'invisible': open }">
            <svg class="w-6 h-6 text-gray-500 cursor-pointer fill-current hover:text-gray-900" @click="open = true"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </div>

        @include('layouts.website.partials.menus.mobile')
    </div>

    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>