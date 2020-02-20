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

    <div x-data="{ open: false }" class="sticky top-0 z-10 w-full mb-1 text-lg whitespace-no-wrap shadow lg:hidden"
        x-cloak>
        <div class="flex items-center justify-between px-8 py-4 bg-green-600">

            <a href="/" class="flex items-baseline text-gray-100 hover:text-gray-900">
                <svg class="w-16 h-16 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M11.77,19.94A15,15,0,0,0,12,15.77c-.24.09-.47.19-.69.26a3.61,3.61,0,0,1-4.64-1.88A6.93,6.93,0,0,1,6,10.62,20.85,20.85,0,0,0,5.92,8,10.28,10.28,0,0,0,5.1,4.46c-.34-.73-.7-1.46-1-2.19a4.25,4.25,0,0,1-.31-.91A1.08,1.08,0,0,1,4.84,0a4,4,0,0,1,2,.53A15.69,15.69,0,0,1,10,2.73a32.91,32.91,0,0,1,4.8,5,7.31,7.31,0,0,1,1.37,2.71,3,3,0,0,1-.79,2.92,10,10,0,0,1-2,1.55l-.83.51a.23.23,0,0,0-.14.28,17.6,17.6,0,0,1,.06,3.84c0,.33-.15.42-.47.41Zm.56-5c.12-.07.25-.11.36-.19l2-1.5a2,2,0,0,0,.7-2,7,7,0,0,0-1.06-2.71,21.73,21.73,0,0,0-4.27-5,14.66,14.66,0,0,0-3-2.12A3.21,3.21,0,0,0,5.64,1c-.56,0-.76.2-.61.73.2.73.43,1.45.7,2.16a15,15,0,0,1,1,5.78V11.3A4.82,4.82,0,0,0,8.26,15a2.35,2.35,0,0,0,.93.54,3.89,3.89,0,0,0,2.47-.24.36.36,0,0,0,.36-.38.5.5,0,0,0,0-.12,22.91,22.91,0,0,0-.65-3.38l-.15-.55.08-.06c.08.09.2.16.23.26A14.46,14.46,0,0,1,12,12.66c.16.75.28,1.51.41,2.3Z" />
                    <path
                        d="M8.21,13.27l.4-.44c.43-.5.87-1,1.31-1.49.2-.23.39-.47.61-.69a.66.66,0,0,0,.14-.79L9.2,6.12a.38.38,0,0,1,0-.21c.08.14.17.27.24.41A16.38,16.38,0,0,1,10.89,9.9a.54.54,0,0,0,.48.43,9.85,9.85,0,0,1,3.09,1.46.52.52,0,0,1,.11.1V12l-.24-.09c-1.06-.46-2.13-.91-3.19-1.39-.23-.11-.33-.08-.42.14-.44,1.17-1.51,1.76-2.33,2.58a.56.56,0,0,1-.17.09Z" />
                </svg>
                <span class="ml-2 text-4xl font-bold">Naturelek</span>
            </a>

            <svg class="w-6 h-6 text-gray-100 cursor-pointer fill-current hover:text-gray-900"
                x-bind:class="{ 'invisible': open }" @click="open = true" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </div>

        @include('layouts.website.partials.menus.mobile')
    </div>

    @yield('content')

    @include('layouts.website.partials.footer')

    @include('layouts.website.partials.floats')

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>