<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos vista</title>
</head>
<body>
<?php $nombre     =(isset($_POST["nombre"]) && $_POST["nombre"] != "") ?$_POST["nombre"] : "no especifico"; ?>
<?php $apellidos  =(isset($_POST["apellidos"]) && $_POST["apellidos"] != "") ?$_POST["apellidos"] : "no especifico"; ?>
<?php $edad       =(isset($_POST["edad"]) && $_POST["edad"] != "") ?$_POST["edad"] : "no especifico"; ?>
<?php $direccion  =(isset($_POST["direccion"]) && $_POST["direccion"] != "") ?$_POST["direccion"] : "no especifico"; ?>
<?php $TipoDeBoleto =(isset($_POST["TipoDeBoleto"]) && $_POST["TipoDeBoleto"] != "") ?$_POST["TipoDeBoleto"] : "no especifico"; ?>
<?php $boletos     =(isset($_POST["boletos"]) && $_POST["boletos"] != "") ?$_POST["boletos"] : "no especifico"; ?>
    <table border=1 cellpadding=25px>
        <thead>
            <tr>
                <th colspan="4">Six Flags</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "<br><br>$nombre"; ?>
                <td><?php echo "<br><br>$apellidos"; ?>
                <td><?php echo "<br><br>$edad"; ?>
            </tr>
            <tr>
                <td><?php echo "<br><br>$direccion"; ?>
                <td><?php echo "<br><br>$boletos"; ?>
                <td><?php echo "<br><br>$TipoDeBoleto"; ?>
            </tr>
        </tbody>
    </table>
</body>
</html>