<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>detalle pedido</title>
	<link rel="stylesheet" type="text/css" href="css/menu-style.css">
	<script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
	<?php 
		$productos = $_SESSION['shopingCar'];
		$total = 0;

	 ?>
	 <div id="datos-cliente">
	 	<div class="datos-cliente-titulo">
			<h1 >Datos venta</h1>
		</div>
	 	<div class="input-client"><label ><?= $productos['cliente']['nombre'] . ' ' . $productos['cliente']['apellido']?> </label> </div>
	 	<div class="input-client">
	 		<label ><?php echo $productos['cliente']['fono'] . ' '; echo  $productos['cliente']['despacho'] == true ? "Despacho a domicilio" :  ''; ?> </label> 
	 	</div>
	 	<div class="input-client"><label ><?php echo ($productos['cliente']['despacho']) ? $productos['cliente']['direccion'] :  ''; ?> </label> </div>
	 </div>
	 <div id="detalle-productos">
	 	<div class="datos-detalleCompra-titulo">
			<h1 >Detalle Pedido Sushi</h1>
		</div>
		<div class="detalle-rolls">
			<div class="detalle-p-nombre">

				<?php
				//echo count($productos['rolls']);
				//var_dump($productos['rolls'][0][0]['roll']["nombre"]);
				 for ($i = 0 ; $i < count($productos['rolls'][0]) ; $i++) {				
	//				echo $productos['rolls'][0][0];
				 	echo $productos['rolls'][0][$i]['cantidad']  . ' ' .$productos['rolls'][0][$i]['roll']["nombre"] .'<br>';

				} ?>
			</div>
			<div class="detalle-p-valor">
				<?php
				//echo count($productos['rolls']);
				//var_dump($productos['rolls'][0][0]['roll']["nombre"]);
				 for ($i = 0 ; $i < count($productos['rolls'][0]) ; $i++) {				
	//				echo $productos['rolls'][0][0];
				 	$total += ($productos['rolls'][0][$i]['roll']["precio"] * $productos['rolls'][0][$i]['cantidad'] );
				 	echo '$'. ($productos['rolls'][0][$i]['roll']["precio"] * $productos['rolls'][0][$i]['cantidad'] ) .'<br>';

				} ?>
			</div>
		</div>
		<?php if( $productos['bebestible'] != null) {?>
		<div class="detalle-bebestibles">
			<div class="detalle-p-nombre">
			<?php
				//echo count($productos['rolls']);				 
				 	echo $productos['bebestible'][0]['cantidad'] .' ' . $productos['bebestible'][0]['bebestible']["nombre"];
				?>
			</div>
			<div class="detalle-p-valor">
				<?php
				//echo count($productos['rolls']);	
					$total += $productos['bebestible'][0]['bebestible']["precio"];			 
				 	echo '$'.$productos['bebestible'][0]['bebestible']["precio"];

				?>
			</div>
		</div>
		<?php } ?>
		<?php if( $productos['cliente']['despacho'] == true ){ ?>
		<div class="detalle-despacho">
			<div class="detalle-p-nombre">
				*Incluye despacho a domicilio
			</div>
			<div class="detalle-p-valor">
				<?php $total += 1000; ?>
				$1000
			</div>
		</div>
		<?php }  ?>
		<div class="detalle-total">
			<div class="detalle-p-nombre">
				<?php echo 'Total a pagar'; ?>	
			</div>
			<div class="detalle-p-valor">
				<?php echo '$'.$total; ?>
			</div>
	 </div>
	 <div class="pago-detalle">
	 	<div class="detalle-p-nombre">
			<input id="volver" name="volver" value="volver" type="submit" onclick="goback();" >
		</div>
		<div class="detalle-p-valor">
				<input id="pagar" name="pagar" value="pagar" type="submit" >
		</div>
	 </div>
</body>
</html>