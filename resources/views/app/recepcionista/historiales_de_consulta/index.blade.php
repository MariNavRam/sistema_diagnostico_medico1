<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Historiales de consulta
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Paciente</th>
                        <th class="border border-slate-700 ...">Fecha de la cita</th>
                        <th class="border border-slate-700 ...">Diagnóstico</th>
                        <th class="border border-slate-700 ...">Médico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 1</td>
                        <td class="border border-slate-700 ...">22-10-2022</td>
                        <td class="border border-slate-700 ...">Gripe</td>
                        <td class="border border-slate-700 ...">House</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 1</td>
                        <td class="border border-slate-700 ...">22-10-2022</td>
                        <td class="border border-slate-700 ...">Influenza</td>
                        <td class="border border-slate-700 ...">House</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 1</td>
                        <td class="border border-slate-700 ...">22-10-2022</td>
                        <td class="border border-slate-700 ...">Estrés</td>
                        <td class="border border-slate-700 ...">House</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 2</td>
                        <td class="border border-slate-700 ...">22-10-2022</td>
                        <td class="border border-slate-700 ...">Fátiga</td>
                        <td class="border border-slate-700 ...">House</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 3</td>
                        <td class="border border-slate-700 ...">22-10-2022</td>
                        <td class="border border-slate-700 ...">Dengue</td>
                        <td class="border border-slate-700 ...">House</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Paciente 3</td>
                        <td class="border border-slate-700 ...">22-10-2022</td>
                        <td class="border border-slate-700 ...">Estrés</td>
                        <td class="border border-slate-700 ...">House</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
