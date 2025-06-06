<div>
    {{-- Filtro --}}
    <div class="flex flex-row items-center justify-between border-b-2 border-gray-200 mb-3 pb-2">
        <form wire:submit="search">
            <input type="text" wire:model="query" placeholder="Filtrar..." id="filtro"
                class="m-3 rounded-2xl border-2 border-blue-500">

            <button type="submit"
                class="bg-blue-300 hover:bg-blue-500 font-bold text-gray-800 hover:text-gray-200 rounded-3xl px-3 py-2 w-32 uppercase">
                Buscar
            </button>
        </form>

        {{-- Descargar Excel --}}
        <a href="{{ route('export') }}" class="p-2 rounded-2xl bg-blue-300 font-bold text-gray-800 shadow-md hover:bg-blue-500 hover:text-gray-200 h-1/2">
            <div class="flex flex-row gap-3 uppercase">
                Descargar
                {!! svg('excel') !!}
            </div>
        </a>
    </div>

    {{-- Tabla --}}
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">folio</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">apellido</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">teléfono</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">empresa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">puesto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">interés/necesidad</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">invitado por</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($forms as $form)
                    <tr class="{{ $loop->index % 2 === 0 ? 'bg-blue-100' : 'bg-blue-200' }} hover:bg-orange-300">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $form->folio }}</td>
                        <td class="px-6 py-4 whitespace-normal break-words">{{ $form->name }}</td>
                        <td class="px-6 py-4 whitespace-normal break-words">{{ $form->last_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $form->phone_number }}</td>
                        <td class="px-6 py-4 whitespace-normal break-words">{{ $form->company }}</td>
                        <td class="px-6 py-4 whitespace-normal break-words">{{ $form->organization_title }}</td>
                        <td class="px-6 py-4 whitespace-normal break-words">{{ $form->interest }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $form->Company->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $forms->links() }}
    </div>
</div>
