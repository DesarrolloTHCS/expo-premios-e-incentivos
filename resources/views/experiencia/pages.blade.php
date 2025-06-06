<x-experiencia.layouts.app>
    <div class="font-montserrat bg-fondo h-screen">
        <h2 class="text-5xl text-center font-bold text-gray-900 p-5">Páginas Generadas</h2>
        <div class="flex justify-center bg-inherit h-auto">
            <table class="w-11/12 bg-transparent mb-16 shadow-2xl">
                <thead class="bg-blue-300 text-gray-800">
                    <tr class="bg-transparent">
                        <th class="w-1/3 px-4 py-2 rounded-tl-3xl">Nombre Empresa</th>
                        <th class="w-1/3 px-4 py-2 rounded-tr-3xl">Enlace Final</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 bg-gray-200 text-center font-semibold">
                    @foreach ($pages as $page)
                        <tr class="{{ $loop->index % 2 === 0 ? 'bg-blue-100' : 'bg-blue-200' }} hover:bg-orange-300">
                            <td class="border px-4 py-2">{{ $page->name }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('finalSite.show', $page->slug) }}" class="text-black hover:text-white hover:underline">Ver
                                    Página</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-experiencia.layouts.app>
