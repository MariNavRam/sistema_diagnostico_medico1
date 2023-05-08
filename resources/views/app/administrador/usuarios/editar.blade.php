<script>
    console.log("test");
    Swal.fire('Test!', 'Hello test message','success');
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Usuarios
        </h2>
    </x-slot>
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-9"
                    
                     action="{{ route('ActualizarUsuario') }}" method="POST">
                   
                        @csrf
                    
                        <div class="mb-9">
                        <input type="hidden" id="id" name="id" value="{{$user->id}}">
                        
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Nombre
                            </label>
                            <input id="nombre" name="nombre" type="text" value="{{$user->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Correo
                            </label>
                            <input id="correo" name="correo" type="text" value="{{$user->email}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Tipo de usuario
                            </label>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una opción</label>
                            
                            <select id="tipo" name="tipo" type="text" value="{{$user->tipo}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                                @if($user->tipo == "recepcionista")
                                    <option value="recepcionista">Recepcionista</option>
                                    <option value="medico">Médico</option>
                                @elseif($user->tipo == "medico")
                                    <option value="medico">Médico</option>
                                    <option value="recepcionista">Recepcionista</option>
                                @endif
                            </select>
                            <br>
                        </div>
                        <div>
                            <button onclick="editar(this);"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                            type="submit"
                            value="Actualizar">Actualizar
                            </button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>