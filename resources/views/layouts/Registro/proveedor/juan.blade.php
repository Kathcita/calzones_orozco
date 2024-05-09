<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>EnDeuda</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!-- Inicio del forEach para la inserción de datos
                    deben insertarse los nombre exactamente a como se encuentran en la base de datos -->
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->Nombre}}</td>
            <td>{{$cliente->Apellido}}</td>
            <td>{{$cliente->EnDeuda}}</td>
            <td>
                <a href="#" class="add" title="Add" data-toggle="tooltip" data-id="{{$cliente->id}}">
                    <i class="material-icons">&#xE03B;</i></a>

                <a class="edit" title="Edit" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->id}}"><i class="material-icons">&#xE254;</i></a>

                <a href="#" title="delete" class="delete" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->id}}">
                    <i class="material-icons">&#xE872;</i>
                </a>
            </td>
        <tr>

            @include('cliente.delete')
            @include('cliente.edit')

            @endforeach()
    </tbody>
</table>






<div class="modal" tabindex="-1" id="edit{{$cliente->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('Clientes.update', $cliente->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="expNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="expNombre" aria-describedby="nombre" name="nombre" value="{{$cliente->Nombre}}">
                    </div>