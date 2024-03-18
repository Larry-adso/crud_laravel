

      <form method="POST" action="{{url('/estudiante')}}" enctype="multipart/form-data">
    @csrf
    @include('estudiante.form', ['modo'=>'Guardar']);
    </form>


