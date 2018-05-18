<?php
 
	
	function getConnection(){
		$server = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'SushiOeste';
		
		return new Mysqli($server,$user,$pass,$db);
	}
 function getRollsByCategoria(){
 	$query = 'SELECT p.id "idproducto", p.nombre "nombreproducto", p.detalle "detalleproducto", p.precio, p.url, c.id "idcategoria", c.nombre "nombrecategoria", c.detalle "detallecategoria" FROM producto p left join categoria c on p.id_categoria = c.id where tipo_producto = 1';
 	
 	$resp = getConnection()->query($query);
 	return $resp;
 }
 function getRollsByCategoriaCalifornia(){
 	$query = 'SELECT p.id "idproducto", p.nombre "nombreproducto", p.detalle "detalleproducto", p.precio, p.url, c.id "idcategoria", c.nombre "nombrecategoria", c.detalle "detallecategoria" FROM producto p left join categoria c on p.id_categoria = c.id where tipo_producto = 1 and c.id = 1';
 	
 	$resp = getConnection()->query($query);
 	return $resp;
 }
function getRollsByCategoriaEPalta(){
 	$query = 'SELECT p.id "idproducto", p.nombre "nombreproducto", p.detalle "detalleproducto", p.precio, p.url, c.id "idcategoria", c.nombre "nombrecategoria", c.detalle "detallecategoria" FROM producto p left join categoria c on p.id_categoria = c.id where tipo_producto = 1 and c.id = 2';
 	
 	$resp = getConnection()->query($query);
 	return $resp;
 }
function getRollsByCategoriaEAtun(){
 	$query = 'SELECT p.id "idproducto", p.nombre "nombreproducto", p.detalle "detalleproducto", p.precio, p.url, c.id "idcategoria", c.nombre "nombrecategoria", c.detalle "detallecategoria" FROM producto p left join categoria c on p.id_categoria = c.id where tipo_producto = 1 and c.id = 3';
 	
 	$resp = getConnection()->query($query);
 	return $resp;
 }
 function getBebestibles(){
 	$query = 'SELECT p.id "idproducto", p.nombre "nombreproducto", p.detalle "detalleproducto", p.precio, p.url, c.id "idcategoria", c.nombre "nombrecategoria", c.detalle "detallecategoria" FROM producto p left join categoria c on p.id_categoria = c.id where tipo_producto = 2';
 	
 	$resp = getConnection()->query($query);
 	return $resp;
 }

?>