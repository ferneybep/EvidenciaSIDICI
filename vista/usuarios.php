    <?php include('header.php'); 
include('controller.php');

$sentencia = $db->query("SELECT * FROM altausuario limit 8");
$result = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<nav class="containernav-users">
    <h1>Usuarios</h1>
    <div class='opcionesnav-users'>
    <a href="#imprimir"><img src="..\Imagenes\printer-fill.svg"></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Registrar Usuarios
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-users">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Registrar Usuarios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-users">
                                <label for="activo">Documento</label>
                                <input type="text" placeholder="Ingrese documento" class='form-control' required name='activo' />
                                <label for="estado">Nombre</label>
                                <input type="text" placeholder="Ingrese nombre" class='form-control' required name='Estado' />
                                <label for="marca">Apellido</label>
                                <input type="text" placeholder="Ingrese apellido" class='form-control' required name='marca' />
                                <label for="serial">Correo</label>
                                <input type="text" placeholder="Ingrese correo" class='form-control' required name='serial' />
                            </div>
                            <div>
                                <div class="dropdown formoptions-users">
                                    <button class="btn btn-primary dropdown-toggle p-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tipo
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Acción</a></li>
                                        <li><a class="dropdown-item" href="#">Otra acción</a></li>
                                        <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
                                    </ul>
                                    <button class="btn btn-primary dropdown-toggle p-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cargo
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Acción</a></li>
                                        <li><a class="dropdown-item" href="#">Otra acción</a></li>
                                        <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
                                    </ul>
                                    <p class="textestado-users">Estado</p>
                                    <div class="form-check formactivo-users">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Activo
                                        </label>
                                    </div>
                                    <div class="form-check forminactivo-users">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Inactivo
                                        </label>
                                    </div>
                                </div>
                                <div class="formtextarea-users">
                                    <label for="caract">Caracteristicas</label>
                                    <textarea placeholder="Informacion del Activo" class='form-control' required name='caract'></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
</nav>
<main class="containermain-users">
    <!--  -->
    <div class="tables-sidici container-fluid">
        <table id="example" class="table table-striped position-relative table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CARGO</th>
                    <th>ESTADO</th>
                    <th>ROL</th>
                    <th>EDITAR</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $res){ ?>
            <tr>
              <td><?php echo $res->idusuario ?></td>
              <td><?php echo $res->nombrcampo ?></td>
              <td><?php echo $res->cargo ?></td>
              <td><?php echo $res->estado ?></td>
              <td><?php if($res->tipousu==1){echo 'Administrador';} elseif($res->tipousu==0){echo 'Usuario';} else{echo 'empleado';} ?></td>
              <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $res->id?>"> 📝</a></td>
              <!-- <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id?>">Eliminar 🗑️</a></td> -->
            </tr>
            <?php } ?>
            </tr>
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src='\Javascript\datatables.js'></script>
    </div>
</main>
<?php

include('footer.php');

?>

