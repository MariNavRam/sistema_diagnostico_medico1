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
                        <th class="border border-slate-700 ...">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 1</td>
                        <td class="border border-slate-700 ...">Enfermedad 1</td>
                        <td class="border border-slate-700 ...">Prueba 1</td>
                        <td class="border border-slate-700 ...">Cita 1</td>
                        <td class="border border-slate-700 ...">Descripción 1</td>
                        <td>
                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-1 py-0.5 text-center mr-2 mb-2 ">Editar</button>
                            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-0.5 text-center mr-2 mb-2">Eliminar</button>
                        </td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 2</td>
                        <td class="border border-slate-700 ...">Enfermedad 2</td>
                        <td class="border border-slate-700 ...">Prueba 2</td>
                        <td class="border border-slate-700 ...">Cita 2</td>
                        <td class="border border-slate-700 ...">Descripción 2</td>
                        <td>
                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-1 py-0.5 text-center mr-2 mb-2 ">Editar</button>
                            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-0.5 text-center mr-2 mb-2">Eliminar</button>
                        </td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 3</td>
                        <td class="border border-slate-700 ...">Enfermedad 3</td>
                        <td class="border border-slate-700 ...">Prueba 3</td>
                        <td class="border border-slate-700 ...">Cita 3</td>
                        <td class="border border-slate-700 ...">Descripción 3</td>
                        <td>
                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-1 py-0.5 text-center mr-2 mb-2 ">Editar</button>
                            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-0.5 text-center mr-2 mb-2">Eliminar</button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
