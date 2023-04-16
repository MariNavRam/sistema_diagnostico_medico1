<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Index de consultas
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">State</th>
                        <th class="border border-slate-700 ...">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border border-slate-700 ...">Indiana</td>
                        <td class="border border-slate-700 ...">Indianapolis</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Ohio</td>
                        <td class="border border-slate-700 ...">Columbus</td>
                        </tr>
                        <tr>
                        <td class="border border-slate-700 ...">Michigan</td>
                        <td class="border border-slate-700 ...">Detroit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
