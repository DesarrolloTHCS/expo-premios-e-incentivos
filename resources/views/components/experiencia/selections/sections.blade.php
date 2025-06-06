{{-- Inicio selección de secciones --}}
<div id="sectionSelection" class="hidden h-full sm:h-screen text-center">
    <h2 class="text-4xl font-bold text-gray-700 p-3">Elige tus secciones a mostrar</h2>
    <div class="grid grid-cols-1 grid-rows-2 sm:h-4/6 sm:w-auto sm:grid-cols-2 sm:grid-rows-1 sm:gap-y-16 gap-y-6 sm:gap-x-80 justify-items-stretch mt-5 mb-10 mx-5 sm:mx-10">
        <div class="flex flex-col section-option cursor-pointer rounded-3xl p-10 hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out" data-section="cuestionarios">
            <img class="rounded-lg basis-11/12" src="{{ asset('storage/img/sections/cuestionarios.png') }}"
                alt="Cuestionarios">
            <p class="basis-1/12 font-bold text-gray-800 pt-10 text-2xl">Cuestionarios</p>
        </div>
        <div class="flex flex-col section-option cursor-pointer rounded-3xl p-10 hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out" data-section="noticias">
            <img class="rounded-lg basis-11/12" src="{{ asset('storage/img/sections/noticias.png') }}"
                alt="Noticias y comunicados">
            <p class="basis-1/12 font-bold text-gray-800 pt-10 text-3xl">Noticias y comunicados</p>
        </div>
    </div>
    <button id="nextButtonSections"
        class="bg-[#484739] hover:bg-[#2a291b] rounded-xl text-white font-bold tracking-wider text-xl p-5 shadow-2xl mb-8 sm:mb-0">
        Siguiente
    </button>
</div>
{{-- Fin selección de secciones --}}
