<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Registrar paciente
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-9">
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Nombre
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Clasificación
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Signos
                            </label>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecciona un signo</option>
                                <option value="US">Signo 1</option>
                                <option value="CA">Signo 2</option>
                                <option value="FR">Signo 3</option>
                                <option value="DE">Signo 4</option>
                            </select>
                            <div class="inline-flex">
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                    Agregar
                                </button>
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                    Quitar
                                </button>
                                </div>
                        </div>

                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Sintomas
                            </label>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecciona un sintoma</option>
                                <option value="US">Sintoma 1</option>
                                <option value="CA">Sintoma 2</option>
                                <option value="FR">Sintoma 3</option>
                                <option value="DE">Sintoma 4</option>
                            </select>
                            <div class="inline-flex">
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                    Agregar
                                </button>
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                    Quitar
                                </button>
                                </div>
                        </div>

                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Prueba de laboratorio
                            </label>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecciona una prueba de laboratorio</option>
                                <option value="US">Prueba 1</option>
                                <option value="CA">Prueba 2</option>
                                <option value="FR">Prueba 3</option>
                                <option value="DE">Prueba 4</option>
                            </select>
                        </div>

                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Prueba post-mortem
                            </label>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecciona una prueba de laboratorio</option>
                                <option value="US">Prueba 1</option>
                                <option value="CA">Prueba 2</option>
                                <option value="FR">Prueba 3</option>
                                <option value="DE">Prueba 4</option>
                            </select>
                        </div>
                        
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Generar
                        </button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
