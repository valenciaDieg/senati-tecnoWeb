<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $prenombre=$_POST['prenombre'];
        $apellidoP=$_POST['apellidoP'];
        $apellidoM=$_POST['apellidoM'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $fechaNacimiento=$_POST['fechaNacimiento'];
        $sexo=$_POST['sexo'];
        $correo=$_POST['correo'];
        $postal=$_POST['postal'];
        $distrito=$_POST['select'];
        $contraseña=$_POST['contraseña'];
        $repContraseña=$_POST['repContraseña'];
        if ($contraseña==$repContraseña){
            echo "<link rel='stylesheet' href='stylesheet.css'>";
            echo "<h1>Registro exitoso</h2>";
            echo "<h3>Nombre: $prenombre<br>";
            echo "Apellido Paterno: $apellidoP<br>";
            echo "Apellido Materno: $apellidoM<br>";
            echo "Dirección: $direccion<br>";
            echo "Número Telefonico: $telefono<br>";
            echo "Fecha de Nacimiento: $fechaNacimiento<br>";
            echo "Sexo: $sexo<br>";
            echo "Distrito: $distrito";
        } else{
            echo"<h2>ERROR: Las credenciales no son iguales</h3>";
        }
        } else{
            echo"No se enviaron los datos correctamente";
        }
?>