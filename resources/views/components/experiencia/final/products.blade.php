@php
    $categorias = [
        'CuidadoPersonal' => 'Cuidado Personal',
        'Electrodomesticos' => 'Electrodomésticos',
        'Electronica' => 'Electrónica',
        'Salud' => 'Salud',
        'Herramientas' => 'Herramientas',
        'ProductosDigitales' => 'Productos Digitales',
    ];
@endphp

<div class="-mt-10">
    @foreach ([$category1, $category2, $category3] as $categoria)
        @if ($categoria && array_key_exists($categoria, $categorias))
            <h2 class="sm:text-5xl text-3xl text-center font-bold text-gray-900 mt-2 sm:mt-0 sm:p-3">{{ $categorias[$categoria] }}</h2>
            <div class="grid justify-items-center grid-cols-4 grid-rows-1 sm:gap-x-10 sm:gap-y-5 sm:m-5">
                <div
                    class="flex flex-col sm:scale-100 scale-50 w-44 sm:w-auto text-center items-center justify-center shadow-2xl rounded-xl hover:scale-[0.55] sm:hover:scale-105 transition-transform duration-300 ease-in-out cursor-pointer">
                    <img src="{{ asset('storage/img/categories/' . $categoria . '/1.jpg') }}" class="w-full">
                    <p class="w-fit mt-3 pb-3 font-semibold text-2xl">150 {{ $points }}</p>
                </div>
                <div
                    class="flex flex-col sm:scale-100 scale-50 w-44 sm:w-auto text-center items-center justify-center shadow-2xl rounded-xl hover:scale-[0.55] sm:hover:scale-105 transition-transform duration-300 ease-in-out cursor-pointer">
                    <img src="{{ asset('storage/img/categories/' . $categoria . '/2.jpg') }}" class="w-full">
                    <p class="w-fit mt-3 pb-3 font-semibold text-2xl">30 {{ $points }}</p>
                </div>
                <div
                    class="flex flex-col sm:scale-100 scale-50 w-44 sm:w-auto text-center items-center justify-center shadow-2xl rounded-xl hover:scale-[0.55] sm:hover:scale-105 transition-transform duration-300 ease-in-out cursor-pointer">
                    <img src="{{ asset('storage/img/categories/' . $categoria . '/3.jpg') }}" class="w-full">
                    <p class="w-fit mt-3 pb-3 font-semibold text-2xl">60 {{ $points }}</p>
                </div>
                <div
                    class="flex flex-col sm:scale-100 scale-50 w-44 sm:w-auto text-center items-center justify-center shadow-2xl rounded-xl hover:scale-[0.55] sm:hover:scale-105 transition-transform duration-300 ease-in-out cursor-pointer">
                    <img src="{{ asset('storage/img/categories/' . $categoria . '/4.jpg') }}" class="w-full">
                    <p class="w-fit mt-3 pb-3 font-semibold text-2xl">400 {{ $points }}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
