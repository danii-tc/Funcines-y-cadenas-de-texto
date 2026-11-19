<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Llamado de funciones</h1>
    <form method="POST" action="">
    <label for="c">Cadena:</label>
    <input type="text" step="any" name="c" id="c" style="width: 150px; height: 25px" required>
    <br><br>
    <button type="submit" name="convertir">Convertir</button>
    <br><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=== "POST" && isset($_POST['convertir'])) {
            require_once("cadenas.php");
            $c= strval($_POST['c']);
            echo "La cantidad de caracteres es: ". contar_caracteres($c). "<br>";
            echo "En mayusculas: ". cadena_mayus($c). "<br>";
            echo "En minusculas: ". cadena_minus($c). "<br>";
            echo "Cadena invertida: ". invertir_cadena($c). "<br>";
            echo "Es palindromo?: ". palindromo($c). "<br>";
            echo "Las vocales son: ". contar_vocales($c). "<br>";
        }
    ?>
</body>
</html>