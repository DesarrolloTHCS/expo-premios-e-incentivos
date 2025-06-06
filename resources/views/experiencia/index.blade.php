<x-experiencia.layouts.app>

    <x-slot:title>
        Experiencia Digital
    </x-slot>

    {{-- Pre-carga de las imágenes de fondo --}}
    <x-experiencia.preload />

    {{-- Inicio div principal --}}
    <div id="app" class="bg-fondo font-poppins">

        <x-experiencia.selections.start />

        <x-experiencia.selections.name />

        <x-experiencia.selections.color />

        <x-experiencia.selections.logo />

        <x-experiencia.selections.banner />

        <x-experiencia.selections.points />

        <x-experiencia.selections.categories />

        <x-experiencia.selections.sections />

        <x-experiencia.loading-screen-mobile />

        <x-experiencia.loading-screen />

        <x-experiencia.form />

    </div>

    @vite('resources/js/experience.js')

</x-experiencia.layouts.app>
