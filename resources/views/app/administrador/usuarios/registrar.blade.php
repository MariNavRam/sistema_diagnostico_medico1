<script>
    function registrar(btn){
        var nombre = document.getElementById("nombre").value;
        var correo = document.getElementById("correo").value;
        var password = document.getElementById("password").value;
        var tipo = document.getElementById("tipo").value;
        if(nombre == ""){
            alert("Tienes que ingresar un nombre");
        }
        else if(correo == ""){
            alert("Tienes que ingresar un correo");
        }
        else if(password == ""){
            alert("Tienes que ingresar una contraseña");
        }
        else if(tipo == "-1"){
            alert("Tienes que ingresar un tipo de usuario");
        }
        else{
            btn.disabled = true;
            document.getElementById('formulario').submit();
        }
    }
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Registrar usuarios
        </h2>
    </x-slot>
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-9"
                    action="{{ route('AgregarUsuario') }}" method="POST" id="formulario">
                        @csrf
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Nombre
                            </label>
                            <input id="nombre" name="nombre" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Correo
                            </label>
                            <input id="correo" name="correo" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Contraseña
                            </label>
                            <input id="password" name="password" type="password" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Tipo de usuario
                            </label>
                            <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una opción</label>
                            
                            <select id="tipo" name="tipo" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                                <option selected value="-1">Selecciona una opción</option>
                                <option value="medico">Médico</option>
                                <option value="recepcionista">Recepcionista</option>
                            </select>
                            <br>
                        </div>
                        <div>
                        <div>
                            <input onclick="registrar(this);" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" value="Registrar"/>
                        </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
