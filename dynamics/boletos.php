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
                <th colspan="4"><h1>Six Flags</h1></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "<br><br>$nombre"; ?>
                <td><?php echo "<br><br>$apellidos"; ?>
                <td><?php echo "<br><br>$edad"; ?>
                <td rowspan="3"><?php 
                switch($TipoDeBoleto){
                    case "Boleto de un día": 
                        echo "<img src=\"./PadreSuburbano.png\" width=\"300\">";
                        break;
                    case "Adventure Pass 2022": 
                        echo "<img src=\"./Adventure.jpg\" width=\"300\">";
                        break;
                    case "Flash Pass": 
                        echo "<img src=\"./Rapidom.jpg\" width=\"300\">";
                        break;
                    case "Ultimate Pass 2022": 
                        echo "<img src=\"./ultimate.jpg\" width=\"300\">";
                        break;
                    case "Comprar Six Flags 2022": 
                        echo "<img src=\"./ricachon.png\" width=\"300\">";
                        break;
                }
                
                ?></td>
            </tr>
            <tr>
                <td><?php echo "<br><br>$direccion"; ?>
                <td><?php echo "<br><br>$boletos"; ?>
                <td><?php echo "<br><br>$TipoDeBoleto"; ?>
            </tr>
            <tr>
                <td colspan="3"><?php 
                switch($TipoDeBoleto){
                    case "Boleto de un día": 
                        echo "<strong><i>Padre suburbano</i></strong>";
                        break;
                    case "Adventure Pass 2022": 
                        echo "<strong><i>La aventura te espera</i></strong>";
                        break;
                    case "Flash Pass": 
                        echo "<strong><i>Fiaaaaaaaaaum</i></strong>";
                        break;
                    case "Ultimate Pass 2022": 
                        echo "<strong><i>Todo lo ultimate es mejor</i></strong>";
                        break;
                    case "Comprar Six Flags 2022": 
                        echo "<strong><i>Señor ricon</i></strong>";
                        break;
                }
                
                ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>