@extends('layouts.website.index')

@section('title', 'Nosotros - Naturelek')

@section('content')
<div class="text-gray-900 bg-white">
    <div class="max-w-md mx-auto lg:max-w-6xl lg:px-16">
        <div class="flex flex-wrap px-2 mt-10">
            <div class="w-full lg:w-1/2 lg:pl-16">
                <h1 class="text-4xl font-black tracking-tight text-gray-700">Nosotros</h1>
                <p class="mt-6">
                    Naturelek Consulting es una consultoría energética con gran proyección, cuyo nombre fue creado en
                    junio del 2016. Anteriormente ya contábamos con la experiencia en la gestión de los recursos
                    energéticos de nuestros clientes desde el año 2010, y desde entonces trabajamos día a día con
                    profesionales y empresarios para ofrecer a nuestros clientes las mejores opciones energéticas del
                    mercado.
                </p>
                <p class="mt-6">
                    Contamos para ello con un equipo humano de más de 120 personas, todos ellos profesionales con
                    experiencia en el sector y una gran cartera de clientes. Trabajamos tanto en el mercado español como
                    en el portugués, y ofrecemos cobertura nacional en el País Vasco, Cantabria, Asturias, Galicia,
                    Castilla y León, Madrid, Castilla la Mancha, Andalucía, Islas Baleares, Cataluña, Aragón, Navarra y
                    La Rioja.
                </p>
            </div>
            <div class="self-center mt-6 lg:w-1/2 lg:order-first">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/v1579469565/naturelek/photo-1497366754035-f200968a6e72_yzznte.jpg"
                    alt="Oficinas">
            </div>
        </div>
        <div class="flex flex-wrap px-2 mt-10">
            <div class="w-full lg:w-1/2">
                <h2 class="text-4xl font-black tracking-tight text-gray-700">¿Qué ofrecemos?</h2>
                <p class="mt-6">
                    En Naturelek Consulting estamos especializados tanto en el cliente particular como en asociaciones y
                    grandes empresas. Te ofrecemos un servicio de gestión integral donde se incluye la revisión y
                    análisis de las condiciones contractuales con respecto al actual comercializador, la optimización de
                    los suministros según sus necesidades de consumo, la mejora de las instalaciones lumínicas, así como
                    servicios de auditoría energética. Implantamos el control de mando y la contabilidad energética, que
                    se traduce en un plan general energético para tu organización. Analizamos tanto las facturas de
                    Electricidad como de Gas Natural, Gas Propano, Gasóleo A y B, Pellet, etc.
                </p>
                <p class="mt-6">
                    Nuestro compromiso es ofrecer una atención totalmente personalizada a cada necesidad, ofreciendo la
                    mayor gama de productos energéticos del mercado, con operaciones totalmente adaptadas a cada cliente
                    que redunden en la mejora de sus costes y equipamientos energéticos.</p>
                <a href="/servicios"
                    class="inline-flex pb-1 mt-6 font-bold text-green-700 border-b-2 border-transparent hover:border-green-700">
                    <span>Conoce nuestros servicios</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                    </svg>
                </a>
            </div>
            <div class="self-center mt-6 lg:w-1/2 lg:pl-16">
                <img src="https://res.cloudinary.com/jaquanor/image/upload/v1579469511/naturelek/photo-1557804506-669a67965ba0_onzftu.jpg"
                    alt="Equipo">
            </div>
        </div>
    </div>
</div>
@endsection