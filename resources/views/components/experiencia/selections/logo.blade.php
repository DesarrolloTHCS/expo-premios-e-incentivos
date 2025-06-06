{{-- Inicio selección de logo --}}
<div id="logoSelection" class="hidden h-screen text-center flex flex-col justify-center items-center">
    <h2 class="text-4xl font-bold text-gray-700 p-3">Selecciona tu logotipo</h2>
    <div class="flex flex-col sm:flex-row items-center justify-center mb-20 mt-5 space-y-8 sm:space-y-0 sm:space-x-8">
        <div
            class="container-logo w-1/2 sm:w-1/4 pt-5 pb-5 pl-2 pr-2 hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out rounded-2xl cursor-pointer">
            <img src="{{ asset('storage/img/logos/d.png') }}" class="logo-option mx-auto" data-logo="a.png" id="logo-uno">
        </div>
        <div
            class="container-logo w-1/2 sm:w-1/4 pt-5 pb-5 pl-2 pr-2 hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out rounded-2xl cursor-pointer">
            <img src="{{ asset('storage/img/logos/e.png') }}" class="logo-option mx-auto" data-logo="b.png" id="logo-dos">
        </div>
        <div
            class="container-logo w-1/2 sm:w-1/4 pt-5 pb-5 pl-2 pr-2 hover:bg-gray-800 hover:bg-opacity-50 transition duration-300 ease-in-out rounded-2xl cursor-pointer">
            <img src="{{ asset('storage/img/logos/f.png') }}" class="logo-option mx-auto" data-logo="c.png" id="logo-tres">
        </div>
    </div>

    <div class="mx-8 sm:mx-16 mb-20">
        <label for="customLogoInput" class="block text-lg font-bold text-gray-700">Cargar tu propio logotipo</label>
        <input type="file" id="customLogoInput" name="customLogoInput" class="mt-2 mb-2 p-2 border-2 border-gray-300 rounded-md"
            accept="image/png, image/jpeg" form="selectionForm">
        <p class="text-gray-500">La imagen debe medir 1000 x 400 píxeles.</p>
    </div>

    <button id="nextButtonLogo" class="bg-[#484739] hover:bg-[#2a291b] rounded-xl text-white font-bold tracking-wider text-xl p-5 shadow-2xl">
        Siguiente
    </button>
</div>
{{-- Fin selección de logo --}}
