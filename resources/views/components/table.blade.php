<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                @foreach ($headers as $header)
                    <th>{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>

            @foreach ($employesInfo as $row)
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['nombre'] }}</td>
                    <td>{{ $row['estatus'] }}</td>
                    <td>
                        <a href="{{ route('employe.show', ['id' => $row['id']]) }}" class="btn btn-info">Ver</a>
                       
                    </td>
                </tr>
            @endforeach
         
        </tbody>
    </table>
</div>
