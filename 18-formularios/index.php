<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <input type="text" value="Nombre" name="nombre" maxlength="5" pattern="[A-Z]+">
        <br>
        
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" autofocus="autofocus" placeholder="Apellido">
        <br>
        
        <label for="boton">Boton</label>
        <input type="button" name="boton" value="click aqui">
        <br>
        
        <label for="sexo">Sexo</label>
        <label for="">Hombre</label>
        <input type="checkbox" name="sexo" value="Hombre">
        <label for="">Mujer</label>
        <input type="checkbox" name="sexo" value="Mujer">
        <br>
        
        <label for="color">Color</label>
        <input type="color" name="color">
        <br>
        
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha">
        <br>
        
        <label for="correo">Correo</label>
        <input type="email" name="correo">
        <br>
        
        <label for="archivo">Archivo</label>
        <input type="file" name="archivo" multiple>
        <br>
        
        <label for="numero">Numero</label>
        <input type="number" name="numero">
        <br>
        
        <label for="contrasena">Contraseña</label>
        <input type="passwprd" name="contrasena">
        <br>
        
        <label for="continente">Continente</label>
        <input type="radio" name="continente" value="America">
        <input type="radio" name="continente" value="Europa">
        <input type="radio" name="continente" value="Asia">
        <br>
        
        <label for="web">Pagina web</label>
        <input type="url" name="web">
        <br>

        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        
        <select name="peliculas" id="" value="Peliculas">
            <option value="">Batman</option>
            <option value="">Superman</option>
            <option value="">Spiderman</option>
        </select>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>