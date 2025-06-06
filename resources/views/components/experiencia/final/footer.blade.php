<footer class="bg-{{ $color }} text-white py-8 mt-10">
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center space-y-6 md:flex-row md:space-y-0 md:justify-between">
            <!-- Subscription Form -->
            <div class="text-center md:text-left">
                <h2 class="text-lg font-bold">¡RECIBE LAS MEJORES OFERTAS ANTES QUE NADIE!</h2>
                <div class="mt-4 flex items-center justify-center md:justify-start">
                    <input type="email" placeholder="Escribe tu dirección de correo electrónico..." name="example"
                        class="border border-gray-400 rounded-full px-4 py-2 text-black outline-none w-full">
                    <button class="bg-{{ $color }} text-white p-2 rounded-full ml-2">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.707 22.293l-6.823-6.823a9.5 9.5 0 10-1.414 1.414l6.823 6.823a1 1 0 001.414-1.414zM10 18.5a8.5 8.5 0 118.5-8.5 8.51 8.51 0 01-8.5 8.5z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-col space-y-2 text-center md:text-left">
                <a href="#" class="hover:underline">SERVICIO AL CLIENTE</a>
                <a href="#" class="hover:underline">CONTÁCTANOS</a>
                <a href="#" class="hover:underline">SEGUIMIENTO A TU ENVÍO</a>
                <a href="#" class="hover:underline">VENTA CORPORATIVA</a>
            </div>

            <!-- Social Media Icons -->
            <div class="flex space-x-4">
                <a href="#" class="text-white hover:text-gray-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h11.475v-9.294H9.294v-3.622h3.506V8.413c0-3.479 2.126-5.372 5.233-5.372 1.488 0 2.769.111 3.142.161v3.64h-2.154c-1.69 0-2.016.803-2.016 1.978v2.593h4.031l-.525 3.622h-3.506V24h6.86C23.407 24 24 23.407 24 22.676V1.325C24 .593 23.407 0 22.675 0z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-gray-300">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                        fill="currentColor">
                        <path
                            d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-8 flex flex-col items-center space-y-4 md:flex-row md:space-y-0 md:justify-between">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('storage/img/logos/' . $logo) }}" alt="Logo"
                    class="h-20 w-auto">
                <div class="text-center md:text-left">
                    <h2 class="text-xl font-bold">{{ $name }}</h2>
                </div>
            </div>
            <div class="text-center md:text-right">
                <p>© 2024 {{ $name }}. Todos los derechos reservados.</p>
                <p class="mt-2">
                    <a href="#" class="hover:underline">Política de Privacidad</a> |
                    <a href="#" class="hover:underline">Términos y Condiciones</a>
                </p>
            </div>
        </div>
    </div>
</footer>
