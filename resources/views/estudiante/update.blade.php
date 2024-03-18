<form method="POST" action="{{url('/estudiante/'.$up_est->id)}}" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
@include('estudiante.form', ['modo'=>'Actualizar'])
</form>