<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    var signos = [];
    var sintomas = [];
    var pruebas = [];
    function add_signo(){
        let signo_id = $('#signo').val();
        signos.push(signo_id);
	    var url = '/add_signo_a_tabla';
	    var parametros = {
	        "signos": JSON.stringify(signos)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
	            $('#signos').html(data);
                document.getElementById("signos_ids").value = JSON.stringify(signos);
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
        var url = '/add_signo_a_tabla';
	    var parametros = {
	        "signos": JSON.stringify(signos)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
	            $('#signos').html(data);
                document.getElementById("signos_ids").value = JSON.stringify(signos);
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
	    var url = '/add_sintoma_a_tabla';
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
        var url = '/add_sintoma_a_tabla';
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
	    var url = '/add_prueba_a_tabla';
	    var parametros = {
	        "pruebas": JSON.stringify(pruebas)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
	            $('#pruebas').html(data);
                document.getElementById("pruebas_ids").value = JSON.stringify(pruebas);
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
        var url = '/add_prueba_a_tabla';
	    var parametros = {
	        "pruebas": JSON.stringify(pruebas)
	    };
        
	    $.ajax({
	        url: url,
	        data: parametros,
	        success: function(data){
                console.log("Función éxitosa");
	            $('#pruebas').html(data);
                document.getElementById("pruebas_ids").value = JSON.stringify(pruebas);
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
            Diagnóstico
        </h2>
        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
                @if($tratamientos == null)
                    <h4 class="font-semibold text-xl text-gray-300 dark:text-gray-200 leading-tight">
                        No fue posible determinar la enfermedad que padece {{$cita->paciente->nombre_completo()}}.
                    </h4>
                    <p class="font-serif">Esto se debe a que no se obtuvo un resultado satisfactorio al momento de usar la base de conocimiento. Puede ser posible conocer el resultado si se indican parámetros más precisos y concretos a una enfermedad en específico.</p>
                @else
                    <h4 class="font-semibold text-xl text-gray-300 dark:text-gray-200 leading-tight">
                        En base a los parámetros ingresados, se determina que la enfermedad que padece {{$cita->paciente->nombre_completo()}} es:
                    </h4>
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{$enfermedad->nombre}}
                    </h2>
                    <br>
                    <p class="font-serif" style="color:red;">Y su(s) tratamiento(s):<p>
                     @foreach($tratamientos as $tratamiento)
                        <p class="font-serif">+ {{$tratamiento->tratamiento->resultado}}</p>
                    @endforeach
                @endif
                <img src="https://i.redd.it/fdyomktwy66a1.jpg" alt="deppresion">
            </div>
        </div>
    </x-slot>
</x-app-layout>
