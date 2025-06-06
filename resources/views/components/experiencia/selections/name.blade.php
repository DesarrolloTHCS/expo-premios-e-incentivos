{{-- Inicio selección de nombre --}}
<div id="nameSelection" class="hidden h-screen text-center flex flex-col justify-center items-center sm:flex-col sm:justify-center sm:items-center">
    <h2 class="text-4xl font-bold text-gray-700 p-3">Escribe el nombre de la empresa</h2>
    <div>
        <input type="text" name="name" id="selectedNameInput" form="selectionForm"
            placeholder="Ingresa nombre de empresa" autocomplete="organization"
            class="border-2 border-[#484739] m-10 h-12 w-80 text-center rounded-3xl">
    </div>
    <button id="nextButtonName"
        class="bg-[#484739] hover:bg-[#2a291b] rounded-xl text-white font-bold tracking-wider text-xl p-5 shadow-2xl mt-5 sm:mt-0 sm:ml-5">
        Siguiente
    </button>
</div>
{{-- Fin selección de nombre --}}
