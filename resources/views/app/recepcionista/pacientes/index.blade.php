<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pacientes registrados
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            @if(request()->user()->tipo == 'admin' OR request()->user()->tipo == 'recepcionista')
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <a href="{{route('RegistrarPaciente')}}">Agregar un nuevo paciente</a>
                </button>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Nombre(s)</th>
                        <th class="border border-slate-700 ...">Apellido paterno</th>
                        <th class="border border-slate-700 ...">Apellido materno</th>
                        <th class="border border-slate-700 ...">Dirección</th>
                        <th class="border border-slate-700 ...">Número de contacto</th>
                        @if(request()->user()->tipo == 'admin' OR request()->user()->tipo == 'recepcionista')
                            <th class="border border-slate-700 ...">Acciones</th>
                        @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pacientes as $paciente)
                            <tr>
                            <td class="border border-slate-700 ...">{{ $paciente->nombre }}</td>
                            <td class="border border-slate-700 ...">{{ $paciente->apellido_paterno }}</td>
                            <td class="border border-slate-700 ...">{{ $paciente->apellido_materno }}</td>
                            <td class="border border-slate-700 ...">{{ $paciente->direccion }}</td>
                            <td class="border border-slate-700 ...">{{ $paciente->telefono }}</td>
                            @if(request()->user()->tipo == 'admin' OR request()->user()->tipo == 'recepcionista')
                                <td>
                                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-1 py-0.5 text-center mr-2 mb-2 ">Editar</button>
                                    <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-0.5 text-center mr-2 mb-2">Eliminar</button>
                                </td>
                            @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
