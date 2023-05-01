<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    var signos = [];
    var sintomas = [];
    var pruebas = [];
    var tratamientos = [];
    function add_signo(){
        let signo_id = $('#signo').val();
        signos.push(signo_id);
	    var url = '/enfermedades_add_signo_a_tabla';
	    var parametros = {
	        "signos": JSON.stringify(signos)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
                document.getElementById("signos_ids").value = JSON.stringify(signos);
                console.log("Signos hasta el momento");
                console.log(signos);
                $('#signos').html(data);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
    function delete_signo(){
        console.log("Delete signo");
        let index = signos.length;
        signos.splice(index-1, 1);
        var url = '/enfermedades_add_signo_a_tabla';
	    var parametros = {
	        "signos": JSON.stringify(signos)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
                document.getElementById("signos_ids").value = JSON.stringify(signos);
	            $('#signos').html(data);
                console.log("Signos hasta el momento");
                console.log(signos);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
    function add_sintoma(){
        let sintoma_id = $('#sintoma').val();
        sintomas.push(sintoma_id);
	    var url = '/enfermedades_add_sintoma_a_tabla';
	    var parametros = {
	        "sintomas": JSON.stringify(sintomas)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
                document.getElementById("sintomas_ids").value = JSON.stringify(sintomas);
	            $('#sintomas').html(data);
                console.log("Sintomas hasta el momento");
                console.log(sintomas);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
    function delete_sintoma(){
        console.log("Delete sintoma");
        let index = sintomas.length;
        sintomas.splice(index-1, 1);
        var url = '/enfermedades_add_sintoma_a_tabla';
	    var parametros = {
	        "sintomas": JSON.stringify(sintomas)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
	            $('#sintomas').html(data);
                document.getElementById("sintomas_ids").value = JSON.stringify(sintomas);
                console.log("Sintomas hasta el momento");
                console.log(sintomas);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
    function add_prueba(){
        let prueba_id = $('#prueba_de_laboratorio').val();
        pruebas.push(prueba_id);
	    var url = '/enfermedades_add_prueba_a_tabla';
	    var parametros = {
	        "pruebas": JSON.stringify(pruebas)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
                document.getElementById("pruebas_ids").value = JSON.stringify(pruebas);
	            $('#pruebas').html(data);
                console.log("Pruebas hasta el momento");
                console.log(pruebas);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
    function delete_prueba(){
        console.log("Delete prueba");
        let index = pruebas.length;
        pruebas.splice(index-1, 1);
        var url = '/enfermedades_add_prueba_a_tabla';
	    var parametros = {
	        "pruebas": JSON.stringify(pruebas)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
                document.getElementById("pruebas_ids").value = JSON.stringify(pruebas);
	            $('#pruebas').html(data);
                console.log("Pruebas hasta el momento");
                console.log(pruebas);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
    function add_tratamiento(){
        let tratamiento_id = $('#tratamiento').val();
        tratamientos.push(tratamiento_id);
	    var url = '/enfermedades_add_tratamiento_a_tabla';
	    var parametros = {
	        "tratamientos": JSON.stringify(tratamientos)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
                document.getElementById("tratamientos_ids").value = JSON.stringify(tratamientos);
	            $('#tratamientos').html(data);
                console.log("Tratamientos hasta el momento");
                console.log(tratamientos);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
    function delete_tratamiento(){
        console.log("Delete tratamiento");
        let index = tratamientos.length;
        tratamientos.splice(index-1, 1);
        var url = '/enfermedades_add_tratamiento_a_tabla';
	    var parametros = {
	        "tratamientos": JSON.stringify(tratamientos)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
                document.getElementById("tratamientos_ids").value = JSON.stringify(tratamientos);
	            $('#tratamientos').html(data);
                console.log("Tratamientos hasta el momento");
                console.log(tratamientos);
	        },
            error: function(data){
                console.log("Error");
                console.log(data);
            }     
	    });
    }
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Registrar enfermedad
        </h2>
    </x-slot>
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-xs">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Signos
                    </label>
                    <select id="signo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="-1">Selecciona un signo</option> 
                        @foreach($signos as $signo)
                            <option value="{{ $signo->id }}">{{ $signo->nombre }}</option>
                        @endforeach
                    </select>
                    <div class="inline-flex">        
                        <button onclick="add_signo();" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-2 rounded-l">
                            Agregar
                        </button>
                        <button onclick="delete_signo();" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-2 rounded-r">
                            Quitar
                        </button>
                    </div>
                    <div class="relative w-full flex flex-col shadow-lg mb-6" id="signos">
                        <div>
                            <table class="w-auto" >
                                <thead>
                                    <tr class="border border-solid border-l-0 bottom-0">
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div> 
                    </div>

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Sintomas
                    </label>
                    <select id="sintoma" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="-1">Selecciona un sintoma</option> 
                        @foreach($sintomas as $sintoma)
                            <option value="{{ $sintoma->id }}">{{ $sintoma->nombre }}</option>
                        @endforeach
                    </select>
                    <div class="inline-flex">
                        <button onclick="add_sintoma();" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-2 rounded-l">
                            Agregar
                        </button>
                        <button onclick="delete_sintoma();" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-2 rounded-r">
                            Quitar
                        </button>
                    </div>
                    <div class="relative w-full flex flex-col shadow-lg mb-6" id="sintomas">
                        <div>
                            <table class="w-auto" >
                                <thead>
                                    <tr class="border border-solid border-l-0 bottom-0">
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div> 
                    </div>

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Prueba de laboratorio
                    </label>
                    <select id="prueba_de_laboratorio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="-1">Selecciona una prueba de laboratorio</option> 
                        @foreach($pruebas_de_laboratorio as $prueba)
                            <option value="{{ $prueba->id }}">{{ $prueba->nombre }}</option>
                        @endforeach
                    </select>
                    <div class="inline-flex">
                        <button onclick="add_prueba();" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-2 rounded-l">
                            Agregar
                        </button>
                        <button onclick="delete_prueba();" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-2 rounded-r">
                            Quitar
                        </button>
                    </div>
                    <div class="relative w-full flex flex-col shadow-lg mb-6" id="pruebas">
                        <div>
                            <table class="w-auto" >
                                <thead>
                                    <tr class="border border-solid border-l-0 bottom-0">
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div> 
                    </div>

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Tratamientos
                    </label>
                    <select id="tratamiento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="-1">Selecciona un tratamiento</option> 
                        @foreach($tratamientos as $tratamiento)
                            <option value="{{ $tratamiento->id }}">{{ $tratamiento->resultado }}</option>
                        @endforeach
                    </select>
                    <div class="inline-flex">
                        <button onclick="add_tratamiento();" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-2 rounded-l">
                            Agregar
                        </button>
                        <button onclick="delete_tratamiento();" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-2 rounded-r">
                            Quitar
                        </button>
                    </div>
                    <div class="relative w-full flex flex-col shadow-lg mb-6" id="tratamientos">
                        <div>
                            <table class="w-auto" >
                                <thead>
                                    <tr class="border border-solid border-l-0 bottom-0">
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div> 
                    </div>

                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-9"
                    action="{{ route('AgregarEnfermedad') }}" method="POST">
                        @csrf
                        <input type="hidden" id="signos_ids" name="signos_ids" value="" />
                        <input type="hidden" id="sintomas_ids" name="sintomas_ids" value="" />
                        <input type="hidden" id="pruebas_ids" name="pruebas_ids" value="" />
                        <input type="hidden" id="tratamientos_ids" name="tratamientos_ids" value="" />
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Enfermedad
                            </label>
                            <input id="enfermedad" name="enfermedad" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                        </div>

                        <div>
                        

                        <button 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                        type="submit"
                        value="Registrar">Registrar
                        </button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
