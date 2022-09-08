<?php include('header.php');

?>

    <nav class="containernav-informes">
        <a class="btn btn-primary position-absolute" href="\vista\Historial.html" target="_blank" role="button">historial</a>
        </div>
    </nav>
    <main class="containermain-informes">
        <div class="content-indicador">
            <div class='container'>
            <h3>Activos</h3>
            <canvas id="indicador-activos"  height="45"></canvas>
            </div>
        </div>
        <div class="content-indicador"> 
            <div class="container">
                <h3>Usuarios</h3>
                <canvas id="indicador-usuarios" height="45"></canvas>
                <script>

                </script>
            </div>
        </div>
        <div class="content-indicador"> 
            <div class="container">
                <h3>Novedades</h3>
                <canvas id="indicador-novedades" height="45"></canvas>
            </div> 
        </div>
    </main>
    <!-- boststrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- libreria chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="..\Javascript\informes.js"></script>

<?php include("footer.php"); ?> 