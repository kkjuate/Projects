<?php 


session_start();
$_SESSION['detalle'] = array();

require_once 'conexion.php';
require_once 'Producto.php';

$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MAO</title>


<link href="libs/css/bootstrap.css" rel="stylesheet">
 <script src="libs/js/jquery.js"></script>
    <script src="libs/js/jquery-1.8.3.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libs/ajax.js"></script>
    <link rel="shortcut icon" href="carro.png">
	

    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs/js/alertify/lib/alertify.min.js"></script>

  </head>


  <style>
  	
body{

	
	background-image: url(fond.jpg);
	


}


  </style>

  <body>
 	<div class="container">
 		
 		<div class="page-header">
			<center><h1><font color="white" size="10" face="Algerian">MAO AEROLINEA</font></h1></center>
		</div>
		<center>
 		<div class="row">


			<div class="col-md-4">	
				<div><font color="white" size="6" face="Algerian">DESTINO</font>
				<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
					<option value="0">Seleccione un destino</option>
					<?php foreach($resultado_producto as $producto):?>
						<option value="<?php echo $producto['id']?>"><?php echo $producto['descripcion']?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>




			<div class="col-md-4">
				<div><font color="white" size="6" face="Algerian">BOLETOS</font>
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>




			<div class="col-md-1">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary btn-agregar-producto">AGREGAR</button>
				</div>
			</div>
			<div class="col-md-1">
				<a href="index.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-danger ">ACTUALIZAR</button>
				</div>
			    </a>
			</div>
			<div class="col-md-1">
				<a href="detalle.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">DETALLES</button>
				</div>
			    </a>
			</div>
			<div class="col-md-1">
				<a href="../Aerolinea/index.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">VOLVER</button>
				</div>
			    </a>
			</div>



		</div>
		</center>
		<br>
		<center>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title"><font size="6" face="Algerian" >BOLETOS</font></h3>
		      </div>
			<div class="panel-body detalle-producto">
				<?php if(count($_SESSION['detalle'])>0){?>
					<table class="table">
					    <thead>
					        <tr>
					            <th>Destino</th>
					            <th>Boletos</th>
					            <th>Precio</th>
					            <th>Subtotal</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><?php echo $detalle['precio'];?></td>
					            <td><?php echo $detalle['subtotal'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"><font size="3" face="Algerian" > No hay boletos agregados </font></div>
				<?php }?>
			</div>
		</div>
	</center>
 	</div>
 	<center>
 	<div class="col-md-12">
				<a href="detalle2.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-success "><font size="8" face="Algerian">PAGAR BOLETO</font></button>
				</div>
			    </a>
			</div>
	</center>		
  </body>
</html>
