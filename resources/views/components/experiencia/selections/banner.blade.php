{{-- Inicio selección de banner --}}
<div id="bannerSelection" class="hidden h-screen text-center flex flex-col justify-center items-center">
    <h2 class="text-4xl font-bold text-gray-700 p-2">Selecciona tu banner</h2>
    <div class="flex flex-col mx-2 sm:mx-32 items-center gap-y-3">
        <div
            class="container-banner w-full h-auto sm:w-auto sm:h-1/2 pt-5 pb-5 pl-2 pr-2 hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out rounded-2xl cursor-pointer">
            <img src="{{ asset('storage/img/banners/banner1.jpg') }}" class="banner-option h-auto sm:w-auto sm:h-40 shadow-2xl rounded-md"
                data-banner="banner1" id="banner-uno">
        </div>
        <div
            class="container-banner w-full h-auto sm:w-auto sm:h-1/2 pt-5 pb-5 pl-2 pr-2 hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out rounded-2xl cursor-pointer">
            <img src="{{ asset('storage/img/banners/banner2.jpg') }}" class="banner-option h-auto sm:w-auto sm:h-40 shadow-2xl rounded-md"
                data-banner="banner2" id="banner-dos">
        </div>
    </div>
    <button id="nextButtonBanner"
        class="bg-[#484739] hover:bg-[#2a291b] rounded-xl text-white font-bold tracking-wider text-xl p-5 m-4 shadow-2xl">
        Siguiente
    </button>
</div>
{{-- Fin selección de banner --}}
