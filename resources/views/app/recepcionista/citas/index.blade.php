<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    function cambio_de_estado(id, estado){
        var url = "./cambiar_estado_de_cita";
    
        var parametros = {                    
            "id": id,
            "estado" : estado
        };

        $.ajax({
            url: url,
            data: parametros,
            success: function(data){
                console.log(data);
                console.log("Se consiguió cambiar el estado correctamente");
                alert("Se consiguió cambiar el estado correctamente");
                window.location.reload();
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
            Citas registradas
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            @if(request()->user()->tipo == 'admin' OR request()->user()->tipo == 'recepcionista')
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <a href="{{route('CrearCita')}}">Crear una cita</a>
                </button>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse border border-slate-700 ...">
                    <thead>
                        <tr>
                        <th class="border border-slate-700 ...">Fecha</th>
                        <th class="border border-slate-700 ...">Consultorio</th>
                        <th class="border border-slate-700 ...">Hora</th>
                        <th class="border border-slate-700 ...">Paciente</th>
                        <th class="border border-slate-700 ...">Medico</th>
                        <th class="border border-slate-700 ...">Estado de la cita</th>
                        @if(request()->user()->tipo == 'admin' OR request()->user()->tipo == 'recepcionista')
                            <th class="border border-slate-700 ...">Acciones</th>
                        @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $key => $cita)
                            <tr>
                            <td class="border border-slate-700 ...">{{ $cita->fecha }}</td>
                            <td class="border border-slate-700 ...">{{ $cita->consultorio->nombre }}</td>
                            <td class="border border-slate-700 ...">{{ $cita->hora }}</td>
                            <td class="border border-slate-700 ...">{{ $cita->paciente->nombre_completo() ?? 'Te falta la relación con paciente' }}</td>
                            <td class="border border-slate-700 ...">{{ $cita->medico->name }}</td>
                            @if(request()->user()->tipo == 'admin' OR request()->user()->tipo == 'medico')
                            <td class="border border-slate-700 ...">
                                <select onchange="cambio_de_estado({{$cita->id}}, value)" id="estado_de_cita_{{$key}}" name="estado_de_cita_{{$key}}" type="text" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
                                    <option selected>{{ $cita->estado_de_cita }}</option>
                                    @if( $cita->estado_de_cita  == 'Pendiente')
                                        <option value="Confirmada">Confirmada</option> 
                                        <option value="Cancelada">Cancelada</option>  
                                    @elseif( $cita->estado_de_cita  == 'Confirmada' )   
                                        <option value="Pendiente">Pendiente</option>  
                                        <option value="Cancelada">Cancelada</option>  
                                    @elseif( $cita->estado_de_cita  == 'Cancelada' )   
                                        <option value="Confirmada">Confirmada</option>  
                                        <option value="Pendiente">Pendiente</option>  
                                    @endif 
                                </select>
                            </td>
                            
                            @else
                                <td class="border border-slate-700 ...">{{ $cita->estado_de_cita }}</td>
                            @endif
                            @if(request()->user()->tipo == 'admin' OR request()->user()->tipo == 'recepcionista')
                                <td>
                                    <a type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-1 py-0.5 text-center mr-2 mb-2 " href="{{route('EditarCita',Crypt::encrypt($cita->id))}}">Editar</a>
                                    <a type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-0.5 text-center mr-2 mb-2" href="{{route('EliminarCita',Crypt::encrypt($cita->id))}}">Eliminar</a>
                                </td>
                            @endif
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
