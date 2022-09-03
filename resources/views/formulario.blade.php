<form method="post" action="/mostrar">
    @csrf
    <input type="text" name="username" placeholder="Ingrese se nombre de usuario"><br>
    <input type="password" name="pass1" placeholder="Ingrese contraseña"><br>
    <input type="password" name="pass2" placeholder="Confirme contraseña"><br>
    <input type="submit" value="Enviar"><br>
</form>
