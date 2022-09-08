<?php

include('header.php');

?>

<link rel="stylesheet" href="..\estilos\configuracionperfil.css?perfil">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <section class="perfil-usuario">
        <div class="container-info">
            <div class=informacion-usuario>
                <div class="cambiar-perfil-usuario">
                    <img src="../Imagenes/114858345-software-desarrollo-web-concepto-de-programación-lenguaje-de-programación-abstracto-y-código-de-prog (1).webp" alt="img-perfil">
                    <button type="button" class="boton-perfil">
                        <i class="far fa-image"></i>
                    </button>
                    <div class="nombre-usuario">
                        <h2>Nombre de Usuario</h2>
                    </div>
                    <div class="nombre-datos">
                        <h4>Datos</h4>
                    </div>
                    <ul class="datos">
                    <li><i class="icono fas fa-map-signs"></i> Direccion de usuario: Cra 13#30</li>
                        <li><i class="icono fas fa-phone-alt"></i> Telefono: 31185623974</li>
                        <li><i class="icono fas fa-briefcase"></i> Correo Electronico: Notiene@gmail.com</li>
                        <li><i class="icono fas fa-building"></i> Cargo: Administrador</li>
                        <li><i class="icono fas fa-map-marker-alt"></i> Ubicacion: Santa Marta</li>
                        <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento: 23/05/2005</li>
                        <li><i class="icono fas fa-user-check"></i> Registro: 001</li>
                    </ul>
                </div>
            
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary boton-modal"  data-bs-toggle="modal" data-bs-target="#abrirmodal">
  Editar Perfil
</button>

<!-- Modal -->
<div class="modal fade" id="abrirmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-config">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                            <div class="form-novedades">
                            <label for="activo">Direccion de Usuario</label>
                                <input type="text" placeholder="Ingrese su Direccion" class='form-control' required name='direccion' />
                                <label for="falla">Telefono</label>
                                <input type="text" placeholder="Ingrese su telefono" class='form-control' required name='telefono' />
                                <label for="user">Correo Electronico</label>
                                <input type="text" placeholder="Ingrese su correo" class='form-control' required name='correo' />
                                <label for="caracteristicas">Cargo</label>
                                <input type="text" placeholder="Ingrese su cargo" class='form-control' required name='cargo'>
                                <label for="caracteristicas">Ubicacion</label>
                                <input type="text" placeholder="Ingrese su ubicacion" class='form-control' required name='ubicacion'>
                                <label for="caracteristicas">Fecha de Nacimiento</label>
                                <input type="text" placeholder="Ingrese su fecha de nacimiento" class='form-control' required name='nacimiento'>
                                <label for="caracteristicas">Registro</label>
                                <input type="text" placeholder="Ingrese su registro" class='form-control' required name='registro'>
                            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>
<?php
include('footer.php');
?>