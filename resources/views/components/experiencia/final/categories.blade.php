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

<h2 class="sm:text-5xl text-3xl text-center font-bold text-gray-900 p-3">Categorías</h2>
<style>
    .owl-carousel .owl-stage {
        left: 50px;
    }

    .custom-owl-item {
        transition: transform 0.1s ease-in-out;
    }

    .custom-owl-item:hover {
        transform: scale(1.05);
    }

    @media (max-width: 640px) {
        .custom-owl-item:hover {
            transform: scale(1.05);
        }

        .owl-carousel.owl-drag .owl-item {
            width: 180px;
        }

        .owl-carousel .owl-stage {
            left: 25px;
        }
    }

    .owl-carousel .owl-stage {
        padding: 25px 0 25px 0;
    }
</style>
<div class="sm:w-[99vw] -ml-5">
    <div
        class="owl-carousel grid justify-items-center grid-cols-3 grid-rows-1 mx-0 gap-x-96 sm:gap-x-10 gap-y-5 m-auto sm:m-5">
        @foreach ([$category1, $category2, $category3] as $category)
            @if (array_key_exists($category, $categorias))
                <div
                    class="item custom-owl-item owl-item flex flex-col text-center items-center justify-center rounded-xl pb-3 mb-12 shadow-2xl hover:scale-[1.05] sm:hover:scale-105 transition-transform duration-100 ease-in-out cursor-pointer">
                    <div
                        class="bg-{{ $category }} h-44 w-[180px] sm:h-96 sm:w-96 bg-cover bg-no-repeat bg-center rounded-md">
                    </div>
                    <p class="w-fit sm:w-96 mt-3 font-semibold text-2xl">{{ $categorias[$category] }}</p>
                </div>
            @endif
        @endforeach
    </div>
</div>

@push('scriptsHead')
    <link rel="stylesheet" href="{{ asset('assets/plugin/css/owl.carousel.min.css') }}">
@endpush
@push('scriptsBody')
    <script src="{{ asset('assets/plugin/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 1500,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                },
                itemClass: 'custom-owl-item owl-item',
            });
        });
    </script>
@endpush
