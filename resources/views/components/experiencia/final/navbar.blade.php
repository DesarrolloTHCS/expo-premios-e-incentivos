<nav class="bg-{{ $color }} shadow p-4 flex flex-wrap items-center justify-around">
    <!-- Logo -->
    <div class="flex items-center flex-shrink-0 mb-2 sm:mb-0">
        <img src="{{ asset('storage/img/logos/' . $logo) }}" alt="Logo" class="h-10 sm:h-20 w-auto">
        <span class="ml-5 text-sm sm:text-lg font-bold text-white w-fit whitespace-nowrap">{{ $name }}</span>
    </div>

    <!-- Categories and Brands -->
    <div class="flex flex-wrap justify-center space-x-4 sm:space-x-8 mb-2 sm:mb-0">
        <div class="relative">
            <button class="text-white hover:text-gray-300">CATEGORÍAS</button>
        </div>
        <div class="relative">
            <button class="text-white hover:text-gray-300">MARCAS</button>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="flex items-center mb-2 sm:mb-0">
        <input type="text" placeholder="Buscar Productos..." name="example" class="border rounded-full px-2 sm:px-4 py-1 sm:py-2 outline-none">
        <button class="bg-gray-50 text-white p-1 sm:p-2 rounded-full ml-2">
            <svg class="icon h-4 w-4 sm:h-6 sm:w-6" viewBox="0 0 24 24">
                <path d="M23.707 22.293l-6.823-6.823a9.5 9.5 0 10-1.414 1.414l6.823 6.823a1 1 0 001.414-1.414zM10 18.5a8.5 8.5 0 118.5-8.5 8.51 8.51 0 01-8.5 8.5z"></path>
            </svg>
        </button>
    </div>

    <!-- Icons -->
    <div class="flex items-center space-x-2 sm:space-x-4">
        @php
            if (isset($sections)) {
                $sectionsCount = count($sections);
                if ($sectionsCount == 1) {
                    if ($sections[0] == 'noticias') {
                        echo '
                            <a href="#" class="text-white hover:text-gray-300 relative hover:animate-pulse" id="openModal">
                                <svg class="icon h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z"></path>
                                </svg>
                            </a>
                        ';
                    } elseif ($sections[0] == 'cuestionarios') {
                        echo '
                            <a href="#" class="text-white hover:text-gray-300 relative hover:animate-pulse" id="openModal">
                                <svg class="icon h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z"></path>
                                </svg>
                            <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full animate-ping"></span>
                            <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
                            </a>
                        ';
                    } elseif ($sections[0] == '') {
                        echo '
                            <a href="#" class="text-white hover:text-gray-300 relative hover:animate-pulse" id="openModal">
                                <svg class="icon h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z"></path>
                                </svg>
                            </a>
                        ';
                    }
                } elseif ($sectionsCount > 1) {
                    foreach ($sections as $section) {
                        if ($section == 'cuestionarios') {
                            echo '
                                <a href="#" class="text-white hover:text-gray-300 relative hover:animate-pulse" id="openModal">
                                    <svg class="icon h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z"></path>
                                    </svg>
                                <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full animate-ping"></span>
                                <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
                                </a>
                            ';
                        } elseif ($section == 'noticias') {
                        } else {
                            echo '
                                <a href="#" class="text-white hover:text-gray-300 relative hover:animate-pulse" id="openModal">
                                    <svg class="icon h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z"></path>
                                    </svg>
                                </a>
                            ';
                        }
                    }
                }
            }
        @endphp
        <a href="#" class="text-white hover:text-gray-300 relative hover:animate-pulse">
            <svg class="icon h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
            </svg>
        </a>
        <a href="#" class="text-white hover:text-gray-300 relative hover:animate-pulse">
            <svg class="icon h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 6h18v2H3zm0 7h18v2H3zm0 5h18v2H3z"></path>
            </svg>
        </a>
    </div>
</nav>
