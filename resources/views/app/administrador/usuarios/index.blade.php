<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Usuarios registrados
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{route('RegistrarUsuario')}}">Crear nuevo usuario</a>
            </button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Nombre</th>
                        <th class="border border-slate-700 ...">Correo</th>
                        <th class="border border-slate-700 ...">Tipo de usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Clementine</td>
                        <td class="border border-slate-700 ...">clementine@hotmail.com</td>
                        <td class="border border-slate-700 ...">Recepcionista</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Valeria</td>
                        <td class="border border-slate-700 ...">valeria@gmail.com</td>
                        <td class="border border-slate-700 ...">Médico</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Gabriel</td>
                        <td class="border border-slate-700 ...">gabriel@gmail.com</td>
                        <td class="border border-slate-700 ...">Recepcionista</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
