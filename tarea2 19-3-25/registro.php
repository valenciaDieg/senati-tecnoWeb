<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="stylesheet.css">

</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="registroProceso.php" method="POST">
        <label for="prenombre">Prenombre: </label>
        <input type="text" id="prenombre" name="prenombre" required><br><br>
        <label for="apellidoP">Apellido Paterno: </label>
        <input type="text" id="apellidoP" name="apellidoP" required><br><br>
        <label for="apellidoM">Apellido Materno: </label>
        <input type="text" id="apellidoM" name="apellidoM" required><br><br>
        <label for="direccion">Dirección: </label>
        <input type="text" id="direccion" name="direccion" required><br><br>
        <label for="telefono">Número Telefonico: </label>
        <input type="tel" id="telefono" name="telefono" required><br><br>
        <label for="fechaNacimiento">Fecha de Nacimiento: </label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br><br>

        <label for="sexo">Sexo: </label>
        <label for="masculino">M</label>
        <input type="checkbox" id="masculino" name="sexo" value="masculino">
        <label for="femenino">F</label>
        <input type="checkbox" id="femenino" name="sexo" value="femenino"><br><br>

        <label for="correo">Correo Electronico: </label>
        <input type="email" id="correo" name="correo" required><br><br>
        <label for="postal">Direccion Postal: </label>
        <input type="text" id="postal" name="postal" required><br><br>

        <label for="distrito">Distrito: </label>
        <select name="select">
            <option value="Ancon" selected>Ancón</option>
            <option value="Ate" >Ate</option>
            <option value="Barranco">Barranco</option>
            <option value="Breña">Breña</option>
            <option value="Carabayllo">Carabayllo</option>
            <option value="CercadoDeLima">Cercado De Lima</option>
            <option value="Chaclacayo">Chaclacayo</option>
            <option value="Chorrillos">Chorrillos</option>
            <option value="Cieneguilla">Cieneguilla</option>
            <option value="Comas" >Comas</option>
            <option value="ElAgustino" >El Agustino</option>
            <option value="Independencia" >Independencia</option>
            <option value="JesusMaria" >Jesús María</option>
            <option value="La Molina" >La Molina</option>
            <option value="LaVictoria" >La Victoria</option>
            <option value="Lince" >Lince</option>
            <option value="LosOlivos" >Los Olivos</option>
            <option value="Lurigancho" >Lurigancho</option>
            <option value="Lurin" >Lurín</option>
            <option value="MagdalenaDelMar" >Magdalena del Mar</option>
            <option value="Miraflores" >Miraflores</option>
            <option value="Pachacamac" >Pachacámac</option>
            <option value="Pucusana" >Pucusana</option>
            <option value="PuebloLibre" >Pueblo Libre</option>
            <option value="PuentePiedra" >Puente Piedra</option>
            <option value="PuntaHermosa" >Punta Hermosa</option>
            <option value="PuntaNegra" >Punta Negra</option>
            <option value="Rimac" >Rímac</option>
            <option value="SanBartolo" >San Bartolo</option>
            <option value="SanBorja" >San Borja</option>
            <option value="SanIsidro" >San Isidro</option>
            <option value="SanJuanDeLurigancho" >San Juan de Lurigancho</option>
            <option value="SanLuis" >SanLuis</option>
            <option value="SanMartinDePorres" >San Martin de Porres</option>
            <option value="SanMiguel" >San Miguel</option>
            <option value="SantaAnita" >Santa Anita</option>
            <option value="SantaMariaDelMar" >Santa María del Mar</option>
            <option value="SantaRosa" >Santa Rosa</option>
            <option value="SantiagoDeSurco" >Santiago de Surco</option>
            <option value="Surquillo" >Surquillo</option>
            <option value="VillaElSalvador" >Villa el Salvador</option>
            <option value="VillaMariaDelTriunfo" >Villa Maria del Triunfo</option>
        </select><br><br>

        <label for="contraseña">Contraseña: </label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <label for="repContraseña">Repetir Contraseña: </label>
        <input type="password" id="repContraseña" name="repContraseña" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>