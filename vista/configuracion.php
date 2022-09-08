
<?php 

include('header.php');

?>
<link rel="stylesheet" href="..\estilos\configuracion.css">

<div class='fondo'>
    <section class="content-section">
        <div class='content-perfil'>
            <div class="config-perfil">
            </div>
            <div class="config-name">
                <h1> Nombre de usuario</h1>
           </div>
           <div class="config-informacion">
            <h1>Informacion</h1>
            <form>
                <input class="form-control mt-1" type="text" value="Nombre de usuario" aria-label="Ejemplo de input de solo lectura" readonly>
                <input class="form-control mt-1" type="text" value="Cargo" aria-label="Ejemplo de input de solo lectura" readonly>
                <input class="form-control mt-1" type="text" value="telefono" aria-label="Ejemplo de input de solo lectura" readonly>
            </form>
            <div>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary position-absolute" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Editar perfil
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Editar perfil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
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
  include ('footer.php');
?>