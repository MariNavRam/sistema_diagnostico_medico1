<script>
    function registrar(btn){
        var nombre = document.getElementById("nombre").value;
        var apellido_paterno = document.getElementById("apellido_paterno").value;
        var apellido_materno = document.getElementById("apellido_materno").value;
        var direccion = document.getElementById("direccion").value;
        var telefono = document.getElementById("telefono").value;
        if(nombre == ""){
            alert("Tienes que ingresar un nombre");
        }
        else if(apellido_paterno == ""){
            alert("Tienes que ingresar un apellido paterno");
        }
        else if(apellido_materno == ""){
            alert("Tienes que ingresar un apellido materno");
        }
        else if(direccion == ""){
            alert("Tienes que ingresar una dirección");
        }
        else if(telefono == ""){
            alert("Tienes que ingresar un teléfono");
        }
        else if(String(telefono).length != 10){
            alert("Ingresa diez digitos para el teléfono");
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
            Registrar paciente
        </h2>
    </x-slot>
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-9"
                    action="{{ route('AgregarPaciente') }}" method="POST" id="formulario">
                        @csrf
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Nombre
                            </label>
                            <input id="nombre" name="nombre" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Apellido paterno
                            </label>
                            <input id="apellido_paterno" name="apellido_paterno" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Apellido materno
                            </label>
                            <input id="apellido_materno" name="apellido_materno" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                               Dirección
                            </label>
                            <textarea id="direccion" name="direccion" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control"></textarea>
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Teléfono
                            </label>
                            <input id="telefono" name="telefono" type="number" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div>
                            <input onclick="registrar(this);" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" value="Registrar"/>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
