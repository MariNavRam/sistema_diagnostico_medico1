<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Index de signos
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{route('RegistrarSigno')}}">Agregar un nuevo signo</a>
            </button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Nombre del signo</th>
                        <th class="border border-slate-700 ...">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Signo 1</td>
                        <td class="border border-slate-700 ...">Descripción 1</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Signo 2</td>
                        <td class="border border-slate-700 ...">Descripción 2</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Signo 3</td>
                        <td class="border border-slate-700 ...">Descripción 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
