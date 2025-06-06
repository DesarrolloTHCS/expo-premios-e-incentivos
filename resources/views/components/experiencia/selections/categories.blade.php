{{-- Inicio selección de categorías --}}
<div id="categoriesSelection" class="hidden h-full sm:h-screen flex flex-col items-center justify-center text-center">
    <h2 class="text-4xl font-bold text-gray-700 px-3 pb-3">Selecciona tres categorías</h2>
    <div class="grid grid-cols-2 grid-rows-3 gap-y-4 gap-x-4 h-1/2 w-11/12 sm:h-4/6 sm:w-11/12 sm:grid-cols-3 sm:grid-rows-2 sm:gap-y-16 sm:gap-x-20 justify-center justify-items-center mt-5 mb-10">

        <div class="flex flex-col items-center justify-center px-4 pt-10 category-option cursor-pointer rounded-3xl hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out"
            data-category="CuidadoPersonal">
            <img class="shadow-2xl rounded-3xl h-full sm:mt-3" src="{{ asset('storage/img/categories/1.jpg') }}"
                alt="Cuidado Personal">
            <p class="font-bold text-xl mt-8">
                Cuidado Personal
            </p>
        </div>
        <div class="flex flex-col items-center justify-center px-4 pt-10 category-option cursor-pointer rounded-3xl hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out"
            data-category="Electrodomesticos">
            <img class="shadow-2xl rounded-3xl h-full sm:mt-3" src="{{ asset('storage/img/categories/2.jpg') }}"
                alt="Electrodomésticos">
            <p class="font-bold text-xl mt-8">
                Electrodomésticos
            </p>
        </div>
        <div class="flex flex-col items-center justify-center px-4 pt-10 category-option cursor-pointer rounded-3xl hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out"
            data-category="Electronica">
            <img class="shadow-2xl rounded-3xl h-full mt-3" src="{{ asset('storage/img/categories/3.jpg') }}"
                alt="Electrónica">
            <p class="font-bold text-xl mt-8">
                Electrónica
            </p>
        </div>
        <div class="flex flex-col items-center justify-center px-4 pt-10 category-option cursor-pointer rounded-3xl hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out"
            data-category="Salud">
            <img class="shadow-2xl rounded-3xl h-full mt-3" src="{{ asset('storage/img/categories/4.jpg') }}" alt="Salud">
            <p class="font-bold text-xl mt-8">
                Salud
            </p>
        </div>
        <div class="flex flex-col items-center justify-center px-4 pt-10 category-option cursor-pointer rounded-3xl hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out"
            data-category="Herramientas">
            <img class="shadow-2xl rounded-3xl h-full mt-3" src="{{ asset('storage/img/categories/5.jpg') }}"
                alt="Herramientas">
            <p class="font-bold text-xl mt-8">
                Herramientas
            </p>
        </div>
        <div class="flex flex-col items-center justify-center px-4 pt-10 category-option cursor-pointer rounded-3xl hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out"
            data-category="ProductosDigitales">
            <img class="shadow-2xl rounded-3xl h-full mt-3" src="{{ asset('storage/img/categories/6.jpg') }}"
                alt="Productos digitales">
            <p class="font-bold text-xl mt-8">
                Productos Digitales
            </p>
        </div>
    </div>
    <button id="nextButtonCategories"
        class="bg-[#484739] hover:bg-[#2a291b] rounded-xl text-white font-bold tracking-wider text-xl p-5 shadow-2xl mt-4 mb-8 sm:mb-0">
        Siguiente
    </button>
</div>
{{-- Fin selección de categorías --}}
