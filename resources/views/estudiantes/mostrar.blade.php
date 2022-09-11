<h1>Estudiantes del Curso</h1>
<table>
    <tr>
        <th>id</th>
        <th>Nombres y Apellidos</th>
        <th>Email</th>
    </tr>
@foreach ($resultados as $estudiante)
    <tr>
        <td>{{$estudiante->id}}</td>
        <td>{{$estudiante->nombre}}</td>
        <td>{{$estudiante->email}}</td>
    </tr>
@endforeach
</table>

<form action="/estudiantes1/guardar" method="post">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre"><br>
    <input type="email" name="email" placeholder="ingrese email"><br>
    <input type="submit" value="Guardar">
</form>

// crear una vista para el formulario
// crear un método en el controlador para mostrar el formulario
// crear una ruta para el formulario

