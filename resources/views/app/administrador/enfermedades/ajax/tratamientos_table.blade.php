<script type="text/javascript">
    $(document).ready(function() {
        $('#default_order').DataTable( {
            "order": [
                [0, "asc"]
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        } );
    } );
</script>
<table class="w-auto" >
    <thead>
        <tr class="border border-solid border-l-0 bottom-0">
            <th class="text-md px-6 py-4">#</th>
            <th class="text-md px-6 py-4">Tratamiento</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tratamientos as $key => $tratamiento)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $tratamiento->resultado }}</td>                      
            </tr>
        @endforeach
    </tbody>
</table>