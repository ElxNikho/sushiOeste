<?php
 require_once '/cruds/productos.php';
 $cantidad_productos = '-';
 ?>
<html>
<head>
	<title>menu</title>
	<link rel="stylesheet" type="text/css" href="css/menu-style.css">
	<script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
	<form action="pedido_action.php" method="POST" >
	<div id="datos-cliente">
		<div class="datos-cliente-titulo">
			<h1 >Datos</h1>
		</div>
		<div class="input-cliente"><label for="nombre_cli">Nombre </label> <input id="nombre_cli" name="nombre_cli" type="text" ></div>
		<div class="input-cliente"> <label for="apellido_cli">Apellido </label> <input id="apellido_cli" name="apellido_cli" type="text" ></div>
		<div class="input-cliente"> <label for="fono_cli">Teléfono </label><input id="fono_cli" name="fono_cli" type="text"  ></div>
		<div class="input-cliente"> <label for="despacho_cli">Despacho? </label> <input id="despacho_cli" name="despacho_cli" type="checkbox" onchange="despacho(this);" ></div>
		<div id="direccion" class="input-cliente hidden"> <label for="direccion_cli">Dirección </label> <input id="direccion_cli" name="direccion_cli" type="text" ></div>
		<div class="input-cliente"> <label for="enviar_cli">Comprar </label> <input id="enviar_cli" name="enviar_cli" type="submit" value="Comprar"></div>
	</div>
	<div id="productos-contenedor">
	<?php $rollsCalifornia =  getRollsByCategoriaCalifornia(); echo $cantidad_productos;?>
	<div class="categoria-contenedor">
	 <h1 class="categoria-nombre">California</h1>
	 <?php

		while($row = $rollsCalifornia->fetch_assoc()){
			
			$cantidad_productos += 'sadsad' . $row["idproducto"] . 'asddsa';
			echo $cantidad_productos ;
			?>
			 <div class="producto-by-cat-3">
			 <img class="producto-imagen"src="<?php echo $row['url'] ?>">
			<h4><?php echo $row["nombreproducto"] . ' $' . $row["precio"] ?></h4>
			<input id="<?php echo $row["idproducto"] ?>" name="<?php echo $row["idproducto"] ?>"  class="producto-cantidad" type="number" step="1" min="0" value="0">
			</div>
	<?php
		}		
	 ?>
	</div>
	 <?php $rollsEPalta =  getRollsByCategoriaEPalta(); ?>
	  <div class="categoria-contenedor">
	 <h1 class="categoria-nombre">Palta</h1>
	 <?php
		while($row = $rollsEPalta->fetch_assoc()){
			echo $cantidad_productos  ;
			$cantidad_productos += $row["idproducto"].'-';
			?>
			<div class="producto-by-cat-4">
			<img class="producto-imagen"src="<?php echo $row['url'] ?>">
			<h4><?php echo $row["nombreproducto"] . ' $' . $row["precio"] ?></h4>
			<input id="<?php echo $row["idproducto"] ?>" name="<?php echo $row["idproducto"] ?>"   class="producto-cantidad" type="number" step="1" min="0" value="0">
			</div>
	<?php
		}

	 ?>
	</div>
	 <?php $rollsEAtun =  getRollsByCategoriaEAtun();?>
	  <div class="categoria-contenedor">
	 <h1 class="categoria-nombre">Atún</h1>
	 <?php
		while($row = $rollsEAtun->fetch_assoc()){
			echo $cantidad_productos  ;
			$cantidad_productos += $row["idproducto"].'-';
			?>
			<div class="producto-by-cat-4">
			<img class="producto-imagen"src="<?php echo $row['url'] ?>">
			<h4><?php echo $row["nombreproducto"] . ' $' . $row["precio"] ?></h4>
			<input id="<?php echo $row["idproducto"] ?>" name="<?php echo $row["idproducto"] ?>"  class="producto-cantidad" type="number" step="1" min="0" value="0">
		</div>
	<?php
		}

	 ?>
	</div>
	 <?php $bebestibles =  getBebestibles();?>
	  <div class="categoria-contenedor">
	 <h1 class="categoria-nombre">Bebidas</h1>
	 <?php
		while($row = $bebestibles->fetch_assoc()){
			echo $cantidad_productos  ;
			$cantidad_productos += $row["idproducto"] . 'a';
			?>
			<div class="producto-by-cat-4">
			<img class="producto-imagen"src="<?php echo $row['url'] ?>">
			<h4><?php echo $row["nombreproducto"] . ' $' . $row["precio"] ?></h4>
			<input id="<?php echo $row["idproducto"] ?>" name="<?php echo $row["idproducto"] ?>"  class="producto-cantidad" name="bebida" type="radio" step="1" min="0" value="0">
		</div>
	<?php
		}

	 ?>
	</div>	
	</div>
	<input id="cantidad_productos" name="cantidad_productos" type="hidden" value="<?php echo $cantidad_productos ?>">
	<div id="datos-cliente">
		<div class="input-cliente"> <label for="enviar_cli">Comprar </label> <input id="enviar_cli2" name="enviar_cli" type="submit" value="Comprar"></div>
	</div>
</form>
</body>
</html>