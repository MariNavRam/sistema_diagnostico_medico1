<script>
    function registrar(btn){
        var fecha = document.getElementById("fecha").value;
        var hora = document.getElementById("hora").value;
        var consultorio = document.getElementById("consultorio").value;
        var paciente = document.getElementById("paciente").value;
        var medico = document.getElementById("medico").value;
        if(fecha == ""){
            alert("Tienes que ingresar una fecha");
        }
        else if(hora == ""){
            alert("Tienes que ingresar una hora");
        }
        else if(consultorio == "-1"){
            alert("Tienes que ingresar un consultorio");
        }
        else if(paciente == "-1"){
            alert("Tienes que ingresar un paciente");
        }
        else if(medico == "-1"){
            alert("Tienes que ingresar un médico");
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
            Registro de cita
        </h2>
    </x-slot>
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-9"
                    action="{{ route('AgregarCita') }}" method="POST" id="formulario">
                        @csrf
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Fecha
                            </label>
                            <input id="fecha" name="fecha" type="date" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Hora
                            </label>
                            <input id="hora" name="hora" type="time" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Consultorio
                            </label>
                            <label for="consultorio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una opción</label>
                            
                            <select id="consultorio" name="consultorio" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                                <option selected value="-1">Selecciona una opción</option>
                                @foreach($consultorios as $consultorio)
                                    <option value="{{ $consultorio->id }}">{{ $consultorio->nombre }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Paciente
                            </label>
                            <label for="paciente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una opción</label>
                            
                            <select id="paciente" name="paciente" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                                <option selected value="-1">Selecciona una opción</option>
                                @foreach($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->nombre_completo() }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Médico
                            </label>
                            <label for="medico" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una opción</label>
                            
                            <select id="medico" name="medico" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                                <option selected value="-1">Selecciona una opción</option>
                                @foreach($medicos as $medico)
                                    <option value="{{ $medico->id }}">{{ $medico->name }}</option>
                                @endforeach
                            </select>
                            <br>
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
