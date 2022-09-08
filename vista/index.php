<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDICI</title>
    <link href="../estilos/inicio-sesion.css" rel="stylesheet"/>
    <link rel="icon" href="../Imagenes/Imagen74.png"/>
</head>
 <body class="fondologin">
    <div id='marcologin'>
        <div class="content">
            <img src="../Imagenes/Imagen74.png" alt='Logo Amovil'/>
            <p class="item">Iniciar Sesión</p>
            <p>Por favor ingrese el nombre de Usuario y Contraseña.</p>
        </div>  
        <div class="form">
            <form action="index.php" method="POST">
                <div class="item">
                    <lavel>Usuario:&nbsp; &nbsp; &nbsp; </lavel>
                    <input  type="email" placeholder="Usuario asignado." required id="DatUsaurio" autocomplete="on" name="usuario"/>
                </div>
                <div class="item">
                    <lavel>Contraseña:</lavel>
                    <input type="password" placeholder="Contraseña" required id='Datpasworrd' name="contrasena"/>
                </div>
                <div class="item-boton">
                    <input class='boton' type="submit"  value="Ingresar" name="ingresar"/>  
                </div>     
            </form>
        </div>
        <a class="recordar-con" href="recuperar-contra.php">¿Olvidaste tu contraseña?.</a>
       <div class="termcondicion">
        <p> Al continuar, usted confirma que ha leido y aceptado nuestros:
            <a href="https://web.amovil.co/" target="_blank">Terminos y condiciones.</a>
        </p>
       </div>
    </div>
    <img id="imgamovil" src="../Imagenes/Logo_white.png" alt='Logo_Amovil'/>
 </body>
</html>

<?php

if (!isset($_POST['usuario']) || !isset($_POST['contrasena'])) {
   exit();
}

include_once"controller.php";

$usuario=$_POST['usuario'];
$contrasena = $_POST['contrasena'];
$ingresar=$_POST['ingresar'];

if (isset($_POST['ingresar'])) {

    $sentencia = $db->prepare("SELECT * FROM altausuario WHERE correo = ? and contrasenia = ?;");
    $sentencia->execute([$usuario,$contrasena]);
    $res = $sentencia->fetchObject();
    if (!$res) {
        #No existe
        echo "<script>alert('Error, por favor valide que el usuario y contraseña son correctos')</script>";
        exit();
    }else {
         echo "<script>window.location.href='principal.php?page=principal&usu=$res->correo'</script>";
    }
}



?>


