<!--form action="usuario/addUsuario" method = "post"-->
<?php echo form_open('usuario/upUsuario'); ?>
<?php foreach ($usuario as $usu){ ?>
    <input type="hidden" name="id" 
                    value="<?php echo $usu->idUsuario;?>">
    Usuario:<input type="text" name="username"
                   value="<?php echo $usu->username;?>"><br>
    Contraseña:<input type="text" name="password"
                   value="<?php echo $usu->password;?>"><br>
    Correo:<input type="text" name="email"
                  value="<?php echo $usu->email;?>"><br>
    <input type="submit" value="enviar">
<?php } ?>
</form>
