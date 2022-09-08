<?php
$page='';
if (isset($_GET['page'])) {
    $page= $_GET['page'];
}else{
    $page= 'principal';
}
switch ($page) {
    case 'principal':        
          $page_title = 'Principal';
    break;
    case 'activos':
          $page_title = 'Activos';
    break;
    case 'usuarios':
        $page_title = 'Usuarios';
    break;
    case 'novedades':
        $page_title = 'Novedades';
    break;
    case 'informes':
        $page_title = 'Informes';
    break;
    default: 
          $page_title = 'Page no Found';
    break;
}
?>