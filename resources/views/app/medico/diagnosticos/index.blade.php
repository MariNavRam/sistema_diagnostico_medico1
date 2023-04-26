<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Index de diagnósticos
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{route('CrearDiagnostico')}}">Nuevo Diagnóstico</a>
            </button>
            <div class="relative w-full flex flex-col shadow-lg mb-6">
                <div>
                    <table class="w-auto" >
                        <thead>
                            <tr class="border border-solid border-l-0 bottom-0">
                            <th class="text-md px-4 py-2">Paciente</th>
                            <th class="text-md px-4 py-2">Enfermedad</th>
                            <th class="text-md px-4 py-2">Prueba utilizada</th>
                            <th class="text-md px-4 py-2">Fecha de la cita</th>
                            <th class="text-md px-4 py-2">Descripción del diagnóstico obtenido</th>
                            <th class="text-md px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($diagnosticos as $diagnostico)
                                <tr>
                                <td class="text-md px-4 py-2">{{ $diagnostico->paciente->nombre_completo() }}</td>
                                <td class="text-md px-4 py-2">{{ $diagnostico->enfermedad->nombre }}</td>
                                <td class="text-md px-4 py-2">{{ $diagnostico->prueba->nombre }}</td>
                                <td class="text-md px-4 py-2">{{ $diagnostico->cita->fecha ?? 'Te falta la relación con paciente' }}</td>
                                <td class="text-md px-4 py-2">{{ $diagnostico->resultado_de_la_prueba }}</td>
                                <td>
                                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-1 py-0.5 text-center mr-2 mb-2 ">Editar</button>
                                    <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-0.5 text-center mr-2 mb-2">Eliminar</button>
                                </td>
                                
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>
