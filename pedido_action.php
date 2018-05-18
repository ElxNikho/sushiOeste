<?php 

	echo "otrapagina";
	$nombre_cli = $_POST["nombre_cli"];
	$apellido_cli = $_POST["apellido_cli"];
	$direccion_cli = $_POST["direccion_cli"];
	$fono_cli = $_POST["fono_cli"];
	$despacho_cli = $_POST["despacho_cli"];
	$productos = $_POST["cantidad_productos"];

	$datos = array('cliente' => array('nombre' => $nombre_cli, 'apellido' => $apellido_cli, 'fono' => $fono_cli, 'despacho' => $despacho_cli, 'direccion' => $direccion_cli), array('productos' => $productos) );
	var_dump($datos);

?>
