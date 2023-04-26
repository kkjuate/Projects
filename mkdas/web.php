<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Envio</title>
  </head>
  <body>
  <div class="container">
  <form class="row g-3" method="post" action="envio.php">
 
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Correo</label>
    <input type="email" class="form-control" name="Correo" id="Correo">
  </div>
  <div class="col-5">
    <label for="inputAddress" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="Contrasena" id="Contrasena">
  </div>
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="Direccion" id="Direccion">
  </div>
  <div class="col-md-5">
    <label for="inputCity" class="form-label">Cuidad</label>
    <input type="text" class="form-control" name="Ciudad" id="Cuidad">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form> 
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
	
  </body>
</html>
