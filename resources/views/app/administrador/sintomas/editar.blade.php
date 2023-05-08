<script>
    console.log("test");
    Swal.fire('Test!', 'Hello test message','success');
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar síntomas
        </h2>
    </x-slot>
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-9"
                    action="{{ route('ActualizarSintoma') }}" method="POST">
                        @csrf
                        <div class="mb-9">
                        <input type="hidden" id="id" name="id" value="{{$id}}">
                        
                        </div>
                        <div class="mb-9">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Síntoma
                            </label>
                            <input id="sintoma" name="sintoma" type="text" value="{{$sintoma}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control">
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