<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tailwind</title>
    <style>
        .imagen{
            background-image: url("{{ asset('img/webdev6.jpg') }}");
            height: 400px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>

    {{-- Diseno 1 por bloques --}}
    {{-- <div class="container">
        <div class="grid grid-cols-4 grid-rows-2 gap-4">
             <div class="bg-blue-200">A</div>
             <div class="bg-blue-300">B</div>
             <div class="bg-blue-400 col-span-2 row-span-2">C</div>
             <div class="bg-blue-500">D</div>
             <div class="bg-blue-600">E</div>
        </div>
     </div> --}}

    {{-- Diseno 1 por bloques --}}
    {{-- <div class="px-4">
       <div class="grid grid-cols-4 grid-rows-2 gap-4">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400 col-span-2 row-span-2">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
       </div>
    </div> --}}

    {{-- Diseno 2 por bloques --}}
    {{-- <div class="container">
        <div class="grid grid-flow-col grid-rows-3">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div> --}}

    {{-- Diseno 3 Como funciona grid en Tailwind --}}
    {{-- <div class="container">
        <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
            <div class="bg-green-500">10</div>
            <div class="bg-green-600">11</div>
        </div>
    </div> --}}

    {{-- Tipografías en tailwind (Parte 1) --}}
    {{-- <div class="container">

        <h1 class="">Esto es un título de prueba</h1>

        <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, cumque. Numquam temporibus cumque natus impedit eveniet quibusdam architecto laboriosam aliquam, nostrum, animi perspiciatis? Culpa suscipit excepturi ipsam ipsa cum impedit!</p>

        <ul>
            <li class="">Elemento #01</li>
            <li class="">Elemento #02</li>
            <li class="">Elemento #03</li>
        </ul>

    </div> --}}

    {{-- Usar nuestras propias fuentes (Parte 2) --}}
    {{-- <div class="container">

        <p class="font-mont font-thin">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima ut corrupti, dignissimos assumenda qui alias aperiam at, possimus odio pariatur, voluptatibus quod et corporis. Beatae reprehenderit aliquam eaque officia cum.</p>
        <p class="font-mont font-light">Reiciendis, mollitia maiores iusto ullam minima, voluptas odit molestias hic numquam veritatis dolorem perferendis consectetur ratione architecto? Et saepe sequi magni, ipsa earum, distinctio corporis optio architecto veniam aut animi?</p>
        <p class="font-mont font-semibold">Voluptate, libero necessitatibus accusantium quas consequatur aperiam cumque officia perferendis temporibus maiores saepe consequuntur corporis error minima aut minus, reprehenderit enim excepturi iste eum. Vitae voluptas atque ratione ad illum.</p>
        <p class="font-mont font-black">Quibusdam ex reiciendis velit qui totam voluptatem tempore at aliquid possimus corporis, reprehenderit eaque ut quam, dolore illum amet dignissimos. Soluta error modi quaerat dolore, mollitia tempora similique! Laboriosam, dolorem.</p>

    </div> --}}

    {{-- Pruebas con Letter Spacing --}}
    {{-- <div class="container">

        <p class="tracking-widest">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, expedita praesentium, maxime voluptatibus eveniet, ea fugit earum dolore tenetur est repudiandae? Reiciendis dolor, assumenda similique non eos saepe odio temporibus.</p>

    </div> --}}

    {{-- Estilos en Listas --}}
    {{-- <div class="container">

        <h1 class="text-xl font-bold text-left md:text-center lg:text-right mb-4">Este es el Título</h1>

        <p class="mb-3 text-red-700 hover:text-opacity-70">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet modi maiores pariatur eius, culpa, sed beatae harum ut sequi, nobis nisi magnam voluptatibus aliquam itaque nostrum suscipit ex a exercitationem.</p>

        <ul class="list-decimal md:list-disc list-inside">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam pariatur architecto unde veniam esse ipsa corporis quod nemo, amet autem expedita accusamus optio vel ad officiis illo id, nesciunt minima?</li>
            <li>Dignissimos atque, minima eos debitis distinctio, delectus quos omnis deserunt optio non at eaque temporibus voluptate, asperiores a. Consequatur sapiente et vitae sed molestias repellendus recusandae ipsum inventore velit. Magni.</li>
            <li>Repellat quam alias rerum maiores sit, accusamus natus aut adipisci ut numquam voluptates illum repudiandae iure asperiores optio ipsam. Quibusdam, ex incidunt. Doloribus deleniti repudiandae sed dolorem id, iusto ad?</li>
            <li>Impedit numquam eius iure iste, neque distinctio voluptatibus dolorem? Aspernatur, numquam. Numquam iure, eum sed dicta labore nobis expedita architecto maxime magni, vero optio assumenda aspernatur eligendi doloremque saepe suscipit.</li>
            <li>Unde dolorem nostrum voluptates rerum nobis inventore velit et cumque iure, sed nisi officiis magni consectetur qui. Fugit aspernatur nobis eaque perspiciatis quo itaque excepturi dolore officia, eius ea quisquam!</li>
        </ul>
        <p class="capitalize">Jose enrique sousa salgado</p>

    </div> --}}

    {{-- Opciones de Background Tailwind --}}
    {{-- <div class="container">
        <h1 class="text-center text-3xl font-bold mb-3">Backgrounds</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus illum quisquam dolor voluptatibus iusto vero repellat sapiente at sed blanditiis consectetur, praesentium modi, in reiciendis molestias ipsa veritatis odit sunt?</p>
        <div class="imagen bg-cover bg-right border-4 border-blue-600 border-dashed bg-clip-content p-4"></div>
    </div> --}}

    {{-- Opciones de Background Degradado --}}
    {{-- <div class="container">
        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent">
            Hola Mundo!
        </div>        
    </div> --}}

    {{-- Bordes en Tailwind --}}
    {{-- <div class="container mx-auto pt-5"> --}}
        {{-- border con hover--}}
        {{-- <div class="w-64 h-64 bg-gray-400 border-8 border-blue-800 hover:border-indigo-500">
        </div> --}}
        {{-- border left --}}
        {{-- <div class="w-64 h-64 bg-gray-400 border-l-8 border-blue-800">
        </div> --}}
        {{-- border rounded lg --}}
        {{-- <div class="w-64 h-64 bg-gray-400 border-8 border-blue-800 rounded-lg">
        </div> --}}
        {{-- border Circulo --}}
        {{-- <div class="w-64 h-64 bg-gray-400 border-8 border-blue-800 rounded-full">
        </div> --}}
        {{-- border modificando el Circulo --}}
        {{-- <div class="w-32 h-64 bg-gray-400 border-8 border-blue-800 rounded-full">
        </div> --}}
        {{-- border modificando el Circulo --}}
        {{-- <div class="w-64 h-32 bg-gray-400 border-8 border-blue-800 rounded-full">
        </div> --}}
        <div>
            {{-- agrega lineas divisorias con control de ancho de linea entre parrafos --}}
            {{-- <div class="divide-y-4 divide-gray-600 divide-dotted">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis blanditiis, neque harum hic qui ducimus delectus, dicta, mollitia culpa vero molestias. Ipsam ipsum ut mollitia officiis atque asperiores inventore numquam.</p>
                <p>Sapiente, ut, sit doloribus soluta inventore enim repudiandae natus voluptas animi repellat nemo et minima dolor rem. Est, nihil odio doloribus libero placeat distinctio ut sunt facere ipsam eius dolor!</p>
                <p>Corrupti recusandae perferendis nihil dolore error totam beatae doloremque deleniti? Dolores quasi deserunt accusamus quas, excepturi id, aspernatur quibusdam praesentium sapiente fuga voluptatibus illo consequatur laborum distinctio nisi explicabo! Odio?</p>
                <p>Maxime consequatur aperiam ipsa dolorum quae eveniet incidunt tenetur, aspernatur illo voluptas excepturi corrupti expedita a repudiandae voluptatem id nemo animi molestiae, enim, eum quia. Laborum, aliquam. Commodi, nemo nobis.</p>
                <p>Minima, tempore voluptate labore nobis explicabo laboriosam quam blanditiis incidunt repellendus quas quia nam corrupti distinctio in quisquam mollitia adipisci dolor sed? Officia eveniet accusantium recusandae, provident delectus fuga illum?</p>
            </div> --}}

            {{-- menu de navegacion, usar(emet) a*5{Link $} --}}
            {{-- <nav class="divide-x-2 divide-blue-600 mt-5">
                <a href="">Link 1</a>
                <a href="">Link 2</a>
                <a href="">Link 3</a>
                <a href="">Link 4</a>
                <a href="">Link 5</a>
            </nav> --}}
        </div>
    {{-- </div> --}}
    
    {{-- Tablas en Tailwind --}}
    <table>

        <thead>
            <tr>
                <th>Pais</th>
                <th>Ciudad</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Peru</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>

    </table>

</body>
</html>