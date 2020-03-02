@extends('layouts.website.index')

@section('title', 'Sectores - Naturelek')

@section('content')

<div class="text-gray-900 bg-white">
    <div class="max-w-md px-2 mx-auto mt-10 lg:max-w-6xl lg:px-20">
        <h1 class="text-4xl font-black tracking-tight text-gray-700">Sectores</h1>

        <p class="mt-6 italic">Cabecera a elegir por Naturelek</p>

        <p class="mt-6">
            Porque sabemos que cada empresa es única y cada sector tiene sus necesidades, en Naturelek Consulting
            trabajamos con una gama especializada y totalmente personalizada para cubrir esas necesidades.
        </p>

        <p class="mt-6 italic">
            Cuatro cuadrados para hacer click, una imagen de oficina, otra de un rascacielos, una de un restaurante,
            otra de una fábrica, la de un campo de labranza y la de un autobús. Cada uno enlace a su zona, en fila de
            tres. Interactivo, cuando pase por delante que se agrande o se mueva)
        </p>
    </div>

    <div class="flex flex-wrap justify-center max-w-xl px-2 mx-auto mt-10 lg:max-w-6xl lg:px-20">
        <div class="w-48 h-48 p-2 hover:p-0">
            <a href="#" class="block h-full overflow-hidden rounded-lg shadow-lg">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/f_auto,fl_lossy,q_auto,w_192,h_128/v1583148765/naturelek/stock/black-and-white-board-boardroom-business-260689_nwfboh.jpg"
                    class="object-cover w-full h-32" alt="Oficina">
                <div class="p-4 font-bold text-center text-green-700 whitespace-no-wrap">Público</div>
            </a>
        </div>
        <div class="w-48 h-48 p-2 hover:p-0">
            <a href="#" class="block h-full overflow-hidden rounded-lg shadow-lg">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/f_auto,fl_lossy,q_auto,w_192,h_128/v1583148766/naturelek/stock/high-rise-building-1662159_vksetx.jpg"
                    class="object-cover w-full h-32" alt="Rascacielos">
                <div class="p-4 font-bold text-center text-green-700 whitespace-no-wrap">Inmobiliario</div>
            </a>
        </div>
        <div class="w-48 h-48 p-2 hover:p-0">
            <a href="#" class="block h-full overflow-hidden rounded-lg shadow-lg">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/f_auto,fl_lossy,q_auto,w_192,h_128/v1583148766/naturelek/stock/clear-wine-glass-on-table-67468_ephfyo.jpg"
                    class="object-cover w-full h-32" alt="Restaurante">
                <div class="p-4 font-bold text-center text-green-700 whitespace-no-wrap">Hostelería</div>
            </a>
        </div>
        <div class="w-48 h-48 p-2 hover:p-0">
            <a href="#" class="block h-full overflow-hidden rounded-lg shadow-lg">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/f_auto,fl_lossy,q_auto,w_192,h_128/v1582793771/naturelek/stock/architecture-black-and-white-business-construction-237836_fxiff6.jpg"
                    class="object-cover w-full h-32" alt="Fábrica">
                <div class="p-4 font-bold text-center text-green-700 whitespace-no-wrap">Industria</div>
            </a>
        </div>
        <div class="w-48 h-48 p-2 hover:p-0">
            <a href="#" class="block h-full overflow-hidden rounded-lg shadow-lg">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/f_auto,fl_lossy,q_auto,w_192,h_128/v1583148770/naturelek/stock/photo-of-green-field-near-mountains-974314_njxbbc.jpg"
                    class="object-cover w-full h-32" alt="Campo de labranza">
                <div class="p-4 font-bold text-center text-green-700 whitespace-no-wrap">Agrario</div>
            </a>
        </div>
        <div class="w-48 h-48 p-2 hover:p-0">
            <a href="#" class="block h-full overflow-hidden rounded-lg shadow-lg">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/f_auto,fl_lossy,q_auto,w_192,h_128/v1583148766/naturelek/stock/white-bus-on-road-near-cliff-1178448_nn2ah2.jpg"
                    class="object-cover w-full h-32" alt="Autobús junto al mar">
                <div class="p-4 font-bold text-center text-green-700 whitespace-no-wrap">Transporte</div>
            </a>
        </div>
        <div class="w-48 h-48 p-2 hover:p-0">
            <a href="#" class="block h-full overflow-hidden rounded-lg shadow-lg">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/f_auto,fl_lossy,q_auto,w_192,h_128/v1583148768/naturelek/stock/ground-group-growth-hands-461049_e5ra0j.jpg"
                    class="object-cover w-full h-32" alt="Grupo de personas agarradas por las muñecas">
                <div class="p-4 font-bold text-center text-green-700 whitespace-no-wrap">Asociaciones</div>
            </a>
        </div>
    </div>

    <div class="max-w-md px-2 mx-auto mt-10 lg:max-w-6xl lg:px-20">
        <p class="mt-6">Si no encuentras aquí tu sector, ponte en contacto con nosotros, estaremos encantados de
            encontrar la mejor solución energética para tu empresa.
        </p>
    </div>

    <div class="text-center">
        <a href="/contacto"
            class="inline-block p-4 mt-6 font-bold text-center text-gray-100 bg-green-700 rounded-lg hover:bg-green-800">
            Contacto
        </a>
    </div>
</div>

@endsection