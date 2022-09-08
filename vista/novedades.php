<?php include('header.php'); 
include('controller.php');

$sentencia = $db->query("SELECT * FROM novedades limit 8");
$result = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<nav class="containernav-nov">
    <h1>Novedades</h1>
    <div class="opcionesnav-nov">
    <a href="#imprimir"><img src="..\Imagenes\printer-fill.svg"></a>
        <input class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" value="Registrar novedades">

        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-novedades">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar novedades</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-novedades">
                            <label for="activo">Activo</label>
                                <input type="text" placeholder="Ingrese activo" class='form-control' required name='activo' />
                                <label for="falla">Falla</label>
                                <input type="text" placeholder="Ingrese falla" class='form-control' required name='falla' />
                                <label for="user">usuario afectado</label>
                                <input type="text" placeholder="Ingrese usuario" class='form-control' required name='user' />
                                <label for="caracteristicas">Caracteristicas</label>
                                <input type="text" placeholder="Ingrese Caracteristicas" class='form-control' required name='caracteristicas'>
                            </div>
                            <div class="contentform-nov">
                                <div class="dropdown form-options">
                                    <button class="btn btn-primary dropdown-toggle p-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tipo de solicitud
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Acción</a></li>
                                        <li><a class="dropdown-item" href="#">Otra acción</a></li>
                                        <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
                                    </ul>
                                </div>
                                <div class="formtextarea-nov">
                                    <label for="descrip">Descripcion</label>
                                    <textarea placeholder="Informacion del Activo" class='form-control' required name='descrip'></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </div>
            </div>
       </div>
</nav>
<main class="containermain-nov">
    <!--  -->
    <div class="tables-sidici container-fluid">
        <table id="example" class="table table-striped position-relative table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>ACTIVO</th>
                    <th>FALLA</th>
                    <th>USUARIO AFECTADO</th>
                    <th>ESTADO</th>
                    <th>EDITAR</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $res){ ?>
                   <tr>
                      <td><?php echo $res->idactivo ?></td>
                      <td><?php echo $res->descripcion ?></td>
                      <td><?php echo $res->idusuario?></td>
                      <td><?php echo $res->historial ?></td>
                      
                      <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $res->id?>"> 📝</a></td>
              <!-- <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id?>">Eliminar 🗑️</a></td> -->
            </tr>
            <?php } ?>

            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src='\Javascript\datatables.js'></script>
    </div>
</main>
  <?php include("footer.php"); ?> 