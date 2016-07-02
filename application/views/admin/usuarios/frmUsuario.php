<!--form action="usuario/addUsuario" method = "post"-->
<?php echo form_open('usuario/addUsuario'); ?>
    Usuario:<input type="text" name="username"><br>
    Contraseña:<input type="text" name="password"><br>
    Correo:<input type="text" name="email"><br>
    <input type="submit" value="enviar">
</form>
