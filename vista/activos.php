<?php include('header.php');


include('controller.php');


$sentencia = $db->query("SELECT * FROM activos limit 8");
$result = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>


<div>
    <nav class="containernav-activos">
        <h1>Activos</h1>
        <div class='opcionesnav-activos'>

        <a href="#imprimir"><img src="..\Imagenes\printer-fill.svg"></a>
           
            <!-- Button trigger modal asignar activos-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                Asignar Activo
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modal_asignar">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Asignar Activo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body form-activos">
                            <label for="asig-user">Usuario</label>
                            <input type="text" placeholder="Ingrese usuario" class='form-control' required name='asig-user' />
                            <label for="asig-empl">Empleado</label>
                            <input type="text" placeholder="Ingrese empleado" class='form-control' required name='asig-empl' />
                            <label for="asig-activo">Asignar activo</label>
                            <input type="text" placeholder="Ingrese activo" class='form-control' required name='asig-activo' />
                            <label for="asig-date">Fecha asignacion</label>
                            <input type="date" class='form-control w-50' required name='asig-date' />
                            <div class="form-textarea">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea placeholder="Descripcion de asignacion" class='form-control' required name='descripcion'></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Asignar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal registrar activos -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registro-activos">
                Registrar Activos
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="registro-activos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modalregistro-activos">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Registrar Activos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-activos">
                                    <label for="activo">Activo</label>
                                    <input type="text" placeholder="Ingrese activo" class='form-control' required name='activo' />
                                    <label for="estado">Estado</label>
                                    <input type="text" placeholder="Ingrese estado" class='form-control' required name='Estado' />
                                    <label for="marca">Marca</label>
                                    <input type="text" placeholder="Ingrese marca" class='form-control' required name='marca' />
                                    <label for="serial">Serial</label>
                                    <input type="text" placeholder="Ingrese serial" class='form-control' required name='serial' />
                                </div>
                                <div class="dropdown form-options">
                                    <button class="btn btn-primary dropdown-toggle p-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tipo
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Acción</a></li>
                                        <li><a class="dropdown-item" href="#">Otra acción</a></li>
                                        <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
                                    </ul>
                                </div>
                                <div class="form-textarea">
                                    <label for="caract">Caracteristicas</label>
                                    <textarea placeholder="Informacion del Activo" class='form-control' required name='caract'></textarea>
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
        </div>
    </nav>
    <main class="containermain-activos">
        <!--  -->
        <div class="tables-sidici container-fluid position-relative">
            <table id="example" class="table table-striped position-relative table-sm" style="width:90%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ESTADO</th>
                        <th>TIPO</th>
                        <th>SERIAL</th>
                        <th>MARCA</th>
                        <th>CARACTERISTICAS</th>
                        <th>EDITAR</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($result as $res){ ?>
                   <tr>
                      <td><?php echo $res->idactivo ?></td>
                      <td><?php echo $res->estado ?></td>
                      <td><?php echo $res->tipo ?></td>
                      <td><?php echo $res->serial ?></td>
                      <td><?php echo $res->marca ?></td>
                      <td><?php echo $res->nota ?></td>
                      <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $res->id?>"> 📝</a></td>
              <!-- <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id?>">Eliminar 🗑️</a></td> -->
            </tr>
            <?php } ?>

                </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
            <script src='..\Javascript\datatables.js'></script>
        </div>
    </main>
    <?php
    include('footer.php');
    ?>
 