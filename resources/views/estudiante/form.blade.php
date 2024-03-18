<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados si los tienes -->
</head>
<body>

<div class="container">
    <h1 class="display-4">ACTUALIZAR DATOS</h1>
        @csrf
        <input type="text" name="nombre" id="nombre" value="{{$up_est->nombre}}" placeholder="Nombres" class="form-control mb-3">
        <input type="text" name="p_apel" id="p_apel" value="{{$up_est->p_apel}}"  placeholder="Primer apellido" class="form-control mb-3">
        <input type="text" name="s_apel" id="s_apel" value="{{$up_est->s_apel}}"  placeholder="Segundo apellido" class="form-control mb-3">
        <input type="text" name="correo" id="correo" value="{{$up_est->correo}}"  placeholder="Correo electrónico" class="form-control mb-3">
        <input type="file" name="foto" id="foto" class="form-control-file mb-3">
        <img src="{{asset('storage').'/' .$up_est->foto}}" alt="" class="img-fluid mb-3">
        <input type="submit" value="{{$modo}}" class="btn btn-primary">
</div>

<!-- Bootstrap JS (Opcional, si necesitas funcionalidades de Bootstrap que requieran JavaScript) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
