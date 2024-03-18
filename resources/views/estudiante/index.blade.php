
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="section text-center container-sm">
<h1>REGISTRO DE ESTUDIANTES</h1><br>
    <form method="POST" action="{{url('/estudiante')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4"><input type="text" name="nombre" id="nombre" class="form-control border border-dark mb-3" placeholder="Nombres"></div>
       <div class="form-group col-md-4"><input type="text" name="p_apel" id="p_apel" class="form-control border border-dark mb-3" placeholder="Primer apellido"></div> 
       <div class="form-group col-md-4"><input type="text" name="s_apel" id="s_apel" class="form-control border border-dark mb-3" placeholder="Segundo apellido"></div> 
       <div class="form-group col-md-4"><input type="text" name="correo" id="correo" class="form-control border border-dark mb-3" placeholder="Correo electronico"></div> 
       <div class="form-group col-md-4"><input type="file" name="foto" id="foto"></div> 
  
    </div>
    <input class="btn btn-outline-primary" type="submit"value="guardar"><br>
    </form>
    </div>
    @if(Session::has('mensaje'))
        {{Session::get('mensaje')}}
        @endif
    <table class="table table-light">
<thead class="thead-light">
    <tr>
<th>#</th>
<th>Foto</th>
<th>Nombre</th>
<th>P. Apellido</th>
<th>S. Apellido</th>
<th>Correo</th>
<th>Accion</th>
    </tr>
</thead>
<tbody>
    @foreach ($estudiante as $dato)
    <tr>
        <td>{{$dato->id}}</td>
        <td><img src="{{asset('storage').'/' .$dato->foto}}" alt="" width="20%" height="20%"></td>
        <td>{{$dato->nombre}}</td>
        <td>{{$dato->p_apel}}</td>
        <td>{{$dato->s_apel}}</td>
        <td>{{$dato->correo}}</td>
        <td>
            <a href="{{url('/estudiante/'.$dato->id.'/edit')}}">
                Editar
            </a> |
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