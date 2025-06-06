{{-- Inicio selección de puntos --}}
<div id="pointsSelection" class="hidden h-screen text-center flex flex-col justify-center items-center">
    <h2 class="text-4xl font-bold text-gray-700 p-3">Escribe el nombre de los puntos</h2>
    <div>
        <input type="text" name="points" id="selectedPointsInput" form="selectionForm"
            placeholder="Ingresa nombre de puntos"
            class="border-2 border-[#484739] m-3 h-12 w-64 text-center rounded-3xl">
    </div>
    <button id="nextButtonPoints"
        class="bg-[#484739] hover:bg-[#2a291b] rounded-xl text-white font-bold tracking-wider text-xl p-5 m-4 shadow-2xl">
        Siguiente
    </button>
</div>
{{-- Fin selección de puntos --}}
