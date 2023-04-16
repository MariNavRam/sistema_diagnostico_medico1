<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Index de síntomas
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{route('RegistrarSintoma')}}">Agregar un nuevo síntoma</a>
            </button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Nombre del síntoma</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Sintoma 1</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Sintoma 2</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Sintoma 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
