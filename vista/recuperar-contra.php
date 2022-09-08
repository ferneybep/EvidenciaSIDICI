<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="../estilos/restablecer.css" rel='stylesheet'/>
    <link rel="icon" href="/Imagenes/Imagen74.png"/>
</head>
<body>
  <div id='restablcont'>
    <form>
      <div class="item1">
        <label id="textemail" for="correo">Ingrese su correo electrónico, un enlace para reestablecer su contraseña va a ser enviado a su correo.</label>
      </div>
      <div class="contenedor">
        <input type='email' placeholder="Correo Electronico" required="true" id='formemail' name='correo'/>
        <input type="submit" value="Recuperar Contraseña" class='posbutrec' target='restcontra'/>
        
      </div>
      <h3 id="optionreturn" >--¿Desea regresar al inicio del aplicativo?--</h3>
      <br><br>
      <a href="../vista/index.php" id="posbutreg">Regresar</a>
     </form> 
  </div> 
</body>
</html>