<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pacientes registrados
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{route('RegistrarPaciente')}}">Agregar un nuevo paciente</a>
            </button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Nombre(s)</th>
                        <th class="border border-slate-700 ...">Apellido paterno</th>
                        <th class="border border-slate-700 ...">Apellido materno</th>
                        <th class="border border-slate-700 ...">Dirección</th>
                        <th class="border border-slate-700 ...">Número de contacto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Paulina</td>
                        <td class="border border-slate-700 ...">Zepeda</td>
                        <td class="border border-slate-700 ...">Ramos</td>
                        <td class="border border-slate-700 ...">Av. Girasol #458 Int. 12</td>
                        <td class="border border-slate-700 ...">3322556699</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Celina</td>
                        <td class="border border-slate-700 ...">Alarcón</td>
                        <td class="border border-slate-700 ...">Barajas</td>
                        <td class="border border-slate-700 ...">Av. Mandarina #87 Int. 145</td>
                        <td class="border border-slate-700 ...">3328544461</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Diana</td>
                        <td class="border border-slate-700 ...">Delgado</td>
                        <td class="border border-slate-700 ...">Valderrama</td>
                        <td class="border border-slate-700 ...">Av. Sandia #14 Int. 24</td>
                        <td class="border border-slate-700 ...">3314483978</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
