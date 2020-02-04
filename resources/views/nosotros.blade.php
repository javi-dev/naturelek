@extends('layouts.website.index')

@section('title', 'Nosotros - Naturelek')

@section('content')
<div class="text-gray-900 bg-gray-100">
    <div class="max-w-4xl mx-auto">
        <div class="px-2 pt-10">
            <img src="https://res.cloudinary.com/jaquanor/image/upload/v1579469565/naturelek/photo-1497366754035-f200968a6e72_yzznte.jpg"
                alt="Oficinas">
            <h1 class="text-4xl font-black tracking-tight text-gray-700">Nosotros</h1>
            <p class="mt-4 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                Naturelek Consulting es una consultoría energética con gran proyección, cuyo nombre fue creado en junio
                del 2016. Anteriormente ya contábamos con la experiencia en la gestión de los recursos energéticos de
                nuestros clientes desde el año 2010, y desde entonces trabajamos día a día con profesionales y
                empresarios para ofrecer a nuestros clientes las mejores opciones energéticas del mercado.
            </p>
            <p class="mt-6 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                Contamos para ello con un equipo humano de más de 120 personas, todos ellos profesionales con
                experiencia en el sector y una gran cartera de clientes. Trabajamos tanto en el mercado español como en
                el portugués, y ofrecemos cobertura nacional en el País Vasco, Cantabria, Asturias, Galicia, Castilla y
                León, Madrid, Castilla la Mancha, Andalucía, Islas Baleares, Cataluña, Aragón, Navarra y La Rioja.
            </p>
        </div>

        <div class="px-2 pt-10">
            <img src="https://res.cloudinary.com/jaquanor/image/upload/v1579469511/naturelek/photo-1557804506-669a67965ba0_onzftu.jpg"
                alt="Equipo">
            <h1 class="text-4xl font-black tracking-tight text-gray-700">¿Qué ofrecemos?</h1>
            <p class="mt-4 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                En Naturelek Consulting estamos especializados tanto en el cliente particular como en asociaciones y
                grandes empresas. Te ofrecemos un servicio de gestión integral donde se incluye la revisión y análisis
                de las condiciones contractuales con respecto al actual comercializador, la optimización de los
                suministros según sus necesidades de consumo, la mejora de las instalaciones lumínicas, así como
                servicios de auditoría energética. Implantamos el control de mando y la contabilidad energética, que se
                traduce en un plan general energético para tu organización. Analizamos tanto las facturas de
                Electricidad como de Gas Natural, Gas Propano, Gasóleo A y B, Pellet, etc.
            </p>
            <p class="mt-6 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                Nuestro compromiso es ofrecer una atención totalmente personalizada a cada necesidad, ofreciendo la
                mayor gama de productos energéticos del mercado, con operaciones totalmente adaptadas a cada cliente que
                redunden en la mejora de sus costes y equipamientos energéticos.</p>
            <div class="text-center">
                <a href="/servicios"
                    class="inline-block p-4 m-4 font-bold text-gray-100 bg-green-700 rounded-lg hover:bg-green-800">Conoce
                    nuestros servicios</a>
            </div>
        </div>
    </div>
</div>
@endsection