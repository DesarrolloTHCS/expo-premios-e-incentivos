<div class="m-5">
    <div class="text-center mt-6">
        {{-- Modal --}}
        <div id="myModal" class="modal hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex">
            <div class="modal-content bg-white w-11/12 m-auto p-4 rounded-lg">
                {{-- Contenido del modal --}}
                <div class="flex justify-end items-center border-b-2 pb-2">
                    <button id="closeModal" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                        {!! svg('close') !!}
                    </button>
                </div>
                {{-- Sidebar --}}
                <div class="flex h-3/4">
                    <div class="bg-gray-100 w-80 px-5 shadow-md border-2 font-bold">
                        <ul class="justify-center divide-y-2 text-left">
                            <li class="my-2 pt-2">
                                <div class="w-full rounded-lg">
                                    <button id="openPerfil"
                                        class="flex items-center w-full p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                        {!! svg('profile') !!}
                                        <span class="pl-4">Mi perfil</span>
                                    </button>
                                </div>
                            </li>
                            <li class="my-2 pt-2">
                                <a href="#puntos"
                                    class="flex items-center p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                    {!! svg('points') !!}
                                    <span class="pl-4">Mis {{ $points }}</span>
                                </a>
                            </li>
                            <li class="my-2 pt-2">
                                <div class="w-full rounded-lg">
                                    <button id="openCuestionarios"
                                        class="flex items-center w-full p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                        {!! svg('survey') !!}
                                        <span class="pl-4">Mis cuestionarios</span>
                                    </button>
                                </div>
                            </li>
                            <li class="my-2 pt-2">
                                <a href="#deseos"
                                    class="flex items-center p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                    {!! svg('wishlist') !!}
                                    <span class="pl-4">Lista de deseos</span>
                                </a>
                            </li>
                            <li class="my-2 pt-2">
                                <a href="#pedidos"
                                    class="flex items-center p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                    {!! svg('orders') !!}
                                    <span class="pl-4">Pedidos</span>
                                </a>
                            </li>
                            <li class="my-2 pt-2">
                                <a href="#direccion"
                                    class="flex items-center p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                    {!! svg('shipping') !!}
                                    <span class="pl-4">Dirección de envío</span>
                                </a>
                            </li>
                            <li class="my-2 pt-2">
                                <a href="#cerrar"
                                    class="flex items-center p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                    {!! svg('signout') !!}
                                    <span class="pl-4">Cerrar sesión</span>
                                </a>
                            </li>
                            <li class="my-2 pt-2">
                                <a href="#cambiar"
                                    class="flex items-center p-2 text-gray-900 hover:bg-{{ $color }} hover:text-gray-50 rounded-lg">
                                    {!! svg('password') !!}
                                    <span class="pl-4">Cambiar mi contraseña</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Main content -->
                    <div class="flex-1 p-10">
                        <div id="cuestionariosContent" class="text-gray-900 hidden">
                            <h2 class="text-2xl font-bold col-start-1 col-end-5 text-left mb-4 -mt-3 border-b-2 pb-2">
                                Mis Cuestionarios</h2>
                            <div
                                class="grid grid-cols-3 grid-rows-3 gap-y-5 bg-gray-200 rounded-3xl shadow-xl pb-8 pt-4 items-center justify-center">
                                <!-- Primera fila -->
                                <div class="font-bold text-xl">Nombre</div>
                                <div class="font-bold text-xl">Estatus</div>
                                <div class="font-bold text-xl">Fechas</div>
                                <!-- Segunda fila -->
                                <span id="openCuestionarioFinal"
                                    class="cursor-pointer hover:text-{{ $color }} hover:font-semibold animate-bounce">
                                    Julio
                                    2024</span>
                                <span class="p-1.5 bg-yellow-400 rounded-lg">Cuestionario
                                    pendiente</span>
                                <div>04/07/2024 - 11/07/2024</div>
                                <div>Mayo 2024</div>
                                <span class="p-1.5 bg-green-400 rounded-lg">Cuestionario
                                    completado</span>
                                <div>20/05/2024 - 25/05/2024</div>
                            </div>
                        </div>

                        {{-- Encuesta --}}
                        <div id="cuestionarioFinal" class="flex flex-col hidden -mt-2">
                            <!-- Encabezado -->
                            <div class="flex justify-between items-center mb-4 border-b-2 pb-2">
                                <h2 class="text-2xl font-bold">Julio 2024</h2>
                                <button id="closeCuestionarioFinal"
                                    class="text-gray-600 hover:text-gray-800 focus:outline-none">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Contenido del cuestionario -->
                            <div class="flex flex-col space-y-4 text-left">
                                <label for="testDeEjemplo1">¿A qué Cedis perteneces?</label>
                                <input type="text" name="ejemplo" id="testDeEjemplo1"
                                    class="w-full border-2 border-gray-600 focus:border-{{ $color }} p-2 rounded-md outline-none">
                                <label for="testDeEjemplo2">Coloca tu número de contacto</label>
                                <input type="text" name="ejemplo2" id="testDeEjemplo2"
                                    class="w-full border-2 border-gray-600 focus:border-{{ $color }} p-2 rounded-md outline-none">
                                <span class="text-center">
                                    <button
                                        class="p-3 border-2 outline-none border-{{ $color }} rounded-xl bg-white w-36 text-{{ $color }} font-bold hover:text-white hover:bg-{{ $color }} hover:border-2">Guardar</button>
                                </span>
                            </div>
                        </div>

                        {{-- Profile content --}}
                        <div id="profileContent" class="text-gray-900 hidden">
                            <div class="grid grid-cols-4 gap-y-8 justify-center items-center">
                                <h2 class="text-2xl font-bold col-start-1 col-end-5 text-left -mt-3 border-b-2 pb-2">Mi
                                    Perfil</h2>
                                <div>Nombre(s)</div>
                                <div class="col-span-3"><input type="text" name="nombre" id="nombre"
                                        placeholder="Ingresa tu nombre"
                                        class="w-full border-2 border-gray-600 focus:border-{{ $color }} p-2 rounded-md outline-none">
                                </div>
                                <div>Apellidos</div>
                                <div class="col-span-3"><input type="text" name="apellidos" id="apellidos"
                                        placeholder="Ingresa tus apellidos"
                                        class="w-full border-2 border-gray-600 focus:border-{{ $color }} p-2 rounded-md outline-none">
                                </div>
                                <div>Género</div>
                                <div><select name="genero" id="genero"
                                        class="w-full border-2 border-gray-600 focus:border-{{ $color }} p-2 rounded-md outline-none">
                                        <option value="1">Hombre</option>
                                        <option value="2">Mujer</option>
                                        <option value="3">Otro</option>
                                    </select></div>
                                <div>Fecha de nacimiento</div>
                                <div><input type="date" name="nacimiento" id="nacimiento"
                                        class="w-full border-2 border-gray-600 focus:border-{{ $color }} p-2 rounded-md outline-none">
                                </div>
                                <div>Teléfono</div>
                                <div class="col-span-3"><input type="tel" name="telefono" id="telefono"
                                        placeholder="55 5555 5555"
                                        class="w-full border-2 border-gray-600 focus:border-{{ $color }} p-2 rounded-md outline-none">
                                </div>
                                <div class="col-end-5 -mb-8">
                                    <button
                                        class="p-3 border-2 outline-none border-{{ $color }} rounded-xl bg-white w-36 text-{{ $color }} font-bold hover:text-white hover:bg-{{ $color }} hover:border-2">
                                        Actualizar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
