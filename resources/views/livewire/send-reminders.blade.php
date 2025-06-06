<div>
    <x-admin.scroller />
    <style>
        /* Estilos pantalla de carga */
        .spinner {
            animation: spinner 4s linear infinite;
        }

        @keyframes spinner {Tu Hogar Consentido
            from {
                transform: perspective(352px) rotateY(0deg);
            }

            to {
                transform: perspective(352px) rotateY(360deg);
            }
        }
    </style>
    {{-- Inicio Pantalla de carga --}}
    <div class="w-screen h-screen fixed flex justify-center z-50 hidden" id="pantallaCarga">
        <div
            class="spinner flex flex-col content-center justify-center items-center w-80 h-80 font-bold text-4xl text-gray-900">
            {!! svg('jenny') !!}
            {{ __('Maintenance...') }}
        </div>
    </div>
    {{-- Fin Pantalla de carga --}}

    {{-- Inicio pantalla de carga enviar a seleccionados --}}
    <span wire:loading wire:target="sendToSelected">
        <div class="w-screen h-screen fixed flex justify-center z-50 backdrop-blur-sm" id="pantallaCarga">
            <div
                class="spinner flex flex-col content-center justify-center items-center w-80 h-80 font-bold text-4xl text-gray-900">
                {!! svg('jenny') !!}
                {{ __('Loading...') }}
            </div>
        </div>
    </span>
    {{-- Fin pantalla de carga enviar a seleccionados --}}

    {{-- Inicio pantalla de carga enviar a todos --}}
    <span wire:loading wire:target="sendToAll">
        <div class="w-screen h-screen fixed flex justify-center z-50 backdrop-blur-sm" id="pantallaCarga">
            <div
                class="spinner flex flex-col content-center justify-center items-center w-80 h-80 font-bold text-4xl text-gray-900">
                {!! svg('jenny') !!}
                {{ __('Loading...') }}
            </div>
        </div>
    </span>
    {{-- Fin pantalla de carga enviar a todos --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Send Reminders') }}
        </h2>
    </x-slot>

    <div>
        {{-- Inicio Alerta confirmación de envío --}}
        @if (session('success'))
            <div
                class="w-full border-t border-b border-green-950 bg-green-200 font-bold h-16 text-center align-middle pt-4 text-2xl">
                {{ session('success') }}
            </div>
        @endif
        {{-- Fin Alerta confirmación de envío --}}

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-4">
                        <div id="ActionButtons" class="flex min-w-max border-b-2 border-gray-200 mb-3 pb-4 space-x-5">
                            {{-- Botón para enviar recordatorio a todos --}}
                            <button wire:click="sendToAll" id="sendToAll"
                                wire:confirm="¿Estás seguro que deseas enviar todos los correos?"
                                class="border flex gap-3 border-blue-500 bg-blue-300 hover:bg-blue-500 font-bold text-gray-900 hover:text-gray-200 rounded-3xl px-3 py-2 uppercase">
                                <span wire:loading.remove wire:target="sendToAll" class="flex gap-3">
                                    Enviar a todos
                                    {!! svg('mail') !!}
                                </span>
                                <span wire:loading wire:target="sendToAll">
                                    Enviando...
                                </span>
                            </button>
                            {{-- Botón para enviar recordatorio a seleccionados --}}
                            <button wire:click="sendToSelected" id="sendToSelected"
                                wire:confirm="¿Estás seguro que deseas enviar estos correos?"
                                class="border flex gap-3 border-blue-500 bg-blue-300 hover:bg-blue-500 font-bold text-gray-900 hover:text-gray-200 rounded-3xl px-3 py-2 uppercase">
                                <span wire:loading.remove wire:target="sendToSelected" class="flex gap-3">
                                    Enviar a seleccionados
                                    {!! svg('individualMail') !!}
                                </span>
                                <span wire:loading wire:target="sendToSelected">
                                    Enviando...
                                </span>
                            </button>
                        </div>
                        {{-- Inicio Tabla de registros --}}
                        <div id="tabla">
                            <table
                                class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg overflow-hidden mb-4">
                                {{-- Inicio encabezados --}}
                                <thead class="bg-gray-200 text-gray-700">
                                    <tr>
                                        <th></th>
                                        <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            {{ __('Name') }}</th>
                                        <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            {{ __('Last name') }}</th>
                                        <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            {{ __('Company') }}</th>
                                        <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            {{ __('Email') }}</th>
                                    </tr>
                                </thead>
                                {{-- Fin encabezados --}}
                                {{-- Inicio registros --}}
                                <tbody>
                                    @foreach ($forms as $form)
                                        <tr
                                            class="{{ $loop->index % 2 === 0 ? 'bg-blue-100' : 'bg-blue-200' }} hover:bg-orange-300 text-center">
                                            <td class="pl-3">
                                                <input type="checkbox" value="{{ $form->id }}"
                                                    wire:model="selected" class="rounded-full"
                                                    id="casilla{{ $form->id }}">
                                            </td>
                                            <td class="py-2">{{ $form->name }}</td>
                                            <td class="py-2">{{ $form->last_name }}</td>
                                            <td class="py-2">{{ $form->company }}</td>
                                            <td class="py-2">{{ $form->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                {{-- Fin registros --}}
                            </table>
                            {{-- Enlaces de paginado --}}
                            {{ $forms->links() }}
                        </div>
                        {{-- Fin Tabla de registros --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
