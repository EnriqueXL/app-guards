<div class="table-responsive">
    <table class="table table-striped table-hover table-sm">
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
                        <a href="{{ $row['actions']['show'] }}" class="btn btn-info btn-sm"><i class="far fa-eye"></i></a>
                        <a href="{{ $row['actions']['edit'] }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                        <a href="{{ $row['actions']['delete'] }}" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
         
        </tbody>
    </table>
    <div class="footer-table justify-content-between align-items-center mt-3 text-center">
        <div class="footer-table-text">
            <p>Mostrando {{ $employes->firstItem() }} a {{ $employes->lastItem() }} de {{ $employes->total() }} registros</p>
        </div>
        <div class="footer-table-contain">
            {{ $employes->links() }}
        </div>
    </div>
</div>


