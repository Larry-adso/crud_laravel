<H1>ACTUALIZAR DATOS</H1>
 <input type="text" name="nombre" id="nombre" value="{{$up_est->nombre}}" placeholder="Nombres"><br>
        <input type="text" name="p_apel" id="p_apel" value="{{$up_est->p_apel}}"  placeholder="Primer apellido"><br>
        <input type="text" name="s_apel" id="s_apel" value="{{$up_est->s_apel}}"  placeholder="Segundo apellido"><br>
        <input type="text" name="correo" id="correo" value="{{$up_est->correo}}"  placeholder="Correo electronico"><br>
        <input type="file" name="foto" id="foto"><br>
        <img src="{{asset('storage').'/' .$up_est->foto}}" alt=""><br>
        <input type="submit"value="{{$modo}}"><br>   

