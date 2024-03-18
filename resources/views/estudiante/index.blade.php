
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
        /* Estilos personalizados aquí */
        .custom-container {
            max-width: 600px;
            margin: auto;
        }
        .custom-form-control {
            border: 2px solid #ad1d1d;
            margin-bottom: 10px;
        }
        .custom-form-control:hover {
            border-color: #add8e6; /* Azul claro */
        }
        .custom-table {
            background-color: #f0f0f0;
        }
        /* Cambiar color de los títulos a azul */
        h1 {
            color: rgb(49, 106, 230);
        }
    </style>
</head>
<body>

<div class="section text-center custom-container">
    <h1>REGISTRO </h1><br>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{url('/estudiante')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4"><input type="text" name="id" id="id" class="form-control border border-dark mb-3 custom-form-control" placeholder="Documento"></div>
                    <div class="form-group col-md-4"><input type="text" name="nombre" id="nombre" class="form-control border border-dark mb-3 custom-form-control" placeholder="Nombres"></div>
                    <div class="form-group col-md-4"><input type="text" name="p_apel" id="p_apel" class="form-control border border-dark mb-3 custom-form-control" placeholder="Primer apellido"></div>
                    <div class="form-group col-md-4"><input type="text" name="s_apel" id="s_apel" class="form-control border border-dark mb-3 custom-form-control" placeholder="Segundo apellido"></div>
                    <div class="form-group col-md-4"><input type="text" name="correo" id="correo" class="form-control border border-dark mb-3 custom-form-control" placeholder="Correo electronico"></div>
                    <div class="form-group col-md-4"><input type="file" name="foto" id="foto"></div>
                </div>
                <input class="btn btn-outline-primary" type="submit" value="Guardar"><br>
            </form>
        </div>
    </div>
</div>

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<table class="table custom-table">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>P. Apellido</th>
            <th>S. Apellido</th>
            <th>Correo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estudiante as $dato)
        <tr>
            <td>{{$dato->id}}</td>
            <td><img src="{{asset('storage').'/' .$dato->foto}}" alt="" width="100%" height="100%"></td>
            <td>{{$dato->nombre}}</td>
            <td>{{$dato->p_apel}}</td>
            <td>{{$dato->s_apel}}</td>
            <td>{{$dato->correo}}</td>
            <td>
                <a href="{{url('/estudiante/'.$dato->id.'/edit')}}">Editar</a> |
                <form action="{{url('/estudiante/'.$dato->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Desea Eliminar?')" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
