<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Index de diagnósticos
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{route('GenerarDiagnostico')}}">Nuevo Diagnóstico</a>
            </button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Paciente</th>
                        <th class="border border-slate-700 ...">Enfermedad</th>
                        <th class="border border-slate-700 ...">Prueba utilizada</th>
                        <th class="border border-slate-700 ...">Fecha de la cita</th>
                        <th class="border border-slate-700 ...">Descripción del diagnóstico obtenido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 1</td>
                        <td class="border border-slate-700 ...">Enfermedad 1</td>
                        <td class="border border-slate-700 ...">Prueba 1</td>
                        <td class="border border-slate-700 ...">Cita 1</td>
                        <td class="border border-slate-700 ...">Descripción 1</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 2</td>
                        <td class="border border-slate-700 ...">Enfermedad 2</td>
                        <td class="border border-slate-700 ...">Prueba 2</td>
                        <td class="border border-slate-700 ...">Cita 2</td>
                        <td class="border border-slate-700 ...">Descripción 2</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 3</td>
                        <td class="border border-slate-700 ...">Enfermedad 3</td>
                        <td class="border border-slate-700 ...">Prueba 3</td>
                        <td class="border border-slate-700 ...">Cita 3</td>
                        <td class="border border-slate-700 ...">Descripción 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
