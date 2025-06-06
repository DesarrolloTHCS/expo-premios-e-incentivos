<x-experiencia.layouts.app>
    {{-- Inicio Scroller --}}
    <x-experiencia.scroller :color="$color" />

    {{-- Inicio Opening --}}
    <x-experiencia.final.opening />

    <div class="font-montserrat">

        {{-- Inicio Navbar --}}
        <x-experiencia.final.navbar :color="$color" :logo="$logo" :name="$name" :sections="$sections"/>

        {{-- Inicio Banner --}}
        <x-experiencia.final.banner :banner="$banner" />

        {{-- Inicio Categorías --}}
        <x-experiencia.final.categories :category1="$category1" :category2="$category2" :category3="$category3" />

        {{-- Inicio Productos --}}
        <x-experiencia.final.products :category1="$category1" :category2="$category2" :category3="$category3" :points="$points" />

        {{-- Inicio Secciones --}}
        <x-experiencia.final.sections :sections="$sections" :points="$points" :color="$color"/>

        {{-- Inicio Footer --}}
        <x-experiencia.final.footer :color="$color" :logo="$logo" :name="$name" />

    </div>

    @vite('resources/js/final.js')
    @vite('resources/js/code.js')

</x-experiencia.layouts.app>
