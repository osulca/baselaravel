<h1>Ingeniería de Sistemas e Informática</h1>
<form method="post" action="{{route('procesadoNombre')}}">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre"><br>
    <input type="submit" value="enviar">
</form>
