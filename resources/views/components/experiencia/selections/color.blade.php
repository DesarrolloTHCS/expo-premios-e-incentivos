{{-- Inicio selección de color --}}
<div id="colorSelection" class="hidden h-screen text-center flex flex-col justify-center">
    <h2 class="text-4xl font-bold text-gray-700 p-3">Selecciona tu color</h2>
    <div class="grid h-auto w-auto grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-y-8 gap-x-10 justify-items-center mt-5 mb-10 mx-5">
        <div class="color-option bg-azul cursor-pointer rounded-3xl h-40 w-40" data-color="azul"></div>
        <div class="color-option bg-verde cursor-pointer rounded-3xl h-40 w-40" data-color="verde"></div>
        <div class="color-option bg-naranja cursor-pointer rounded-3xl h-40 w-40" data-color="naranja"></div>
        <div class="color-option bg-azulado cursor-pointer rounded-3xl h-40 w-40" data-color="azulado"></div>
        <div class="color-option bg-verdeOscuro cursor-pointer rounded-3xl h-40 w-40" data-color="verdeOscuro"></div>
        <div class="color-option bg-rojo cursor-pointer rounded-3xl h-40 w-40" data-color="rojo"></div>
    </div>
    <button id="nextButtonColor" class="bg-[#484739] hover:bg-[#2a291b] rounded-xl text-white font-bold tracking-wider text-xl p-5 shadow-2xl mx-auto">
        Siguiente
    </button>
</div>
{{-- Fin selección de color --}}
