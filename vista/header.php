<?php include('titulos.php');

$usuario='';
if (isset($_GET['usu'])) {
    $usuario= $_GET['usu'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title;?></title>
    <!--bostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
     <!--termina-->
    <link rel="stylesheet" href="..\estilos\headerfooter.css">
    <link rel="stylesheet" href="..\estilos\options.css">
    <link rel="icon" href="\Imagenes\Imagen74.png" />
   
</head>
<body class="fondo">
    <header class='menu-arriba'>
        <div>
            <p><?php echo $usuario?></p>
        </div>
        <img src='..\Imagenes\amovil123.png'>
        <a href= 'principal.php?page=principal' title='Principal' class='icon-home'>
            <i class="bi bi-house-door-fill"></i>
        </a>
        <div class='menu-opciones'>
            <li><i class="bi bi-justify" id='icon-justify' title='opciones'></i>
                <ul>
                    <li><a href="activos.php?page=activos"><i class="bi bi-pc-display-horizontal" title="activos"></i>Activos</a></li>
                    <li><a href="usuarios.php?page=usuarios"><i class="bi bi-people-fill"></i>Usuarios</a></li>
                    <li><a href="novedades.php?page=novedades"><i class="bi bi-tools"></i>Novedades</a></li>
                    <li><a href="informes.php?page=informes"><i class="bi bi-bar-chart-line-fill"></i>Informes</a></li>
                </ul>
            </li>
        </div>
        <div class='menu-perfil'>
            <li><i id='icon-person' class="bi bi-person-square" title='Perfil'></i>
                <ul>
                    <li><a href="">Informacion</a></li>
                    <li><a href="..\vista\configuracionperfil.php">Configuracion</a></li>
                    <li><a href="..\vista\index.php">Cerrar sesion<a></li>
                </ul>
            </li>
        </div>
    </header>


    