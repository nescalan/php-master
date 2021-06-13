<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="recibe.php" method="post" >
        <input type="text" name="nombre" placeholder="Nombre: " >
        <br>

        <label for="hombre" >Hombre</label>
        <input type="radio" name="sexo" id="hombre" value="hombre">
        <label for="mujer" >Mujer</label>
        <input type="radio" name="sexo" id="mujer" value="mujer">
        <br>

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>

        <label for="terminos">Aceptar los terminos</label>
        <input type="checkbox" name="terminos" id="terminos">
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>