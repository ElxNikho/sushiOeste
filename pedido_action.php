<script type="text/javascript" src="js/funciones.js"></script>
<?php 
	require_once '/cruds/productos.php';	
	session_start();
	$nombre_cli = $_POST["nombre_cli"];
	$apellido_cli = $_POST["apellido_cli"];
	$direccion_cli = $_POST["direccion_cli"];
	$fono_cli = $_POST["fono_cli"];
	$despacho_cli = isset($_POST["despacho_cli"]) ? true : false;
	$bebida = isset($_POST["bebida"]) ? $_POST["bebida"] :  -1;
	$dataReady = true;

	if (trim($nombre_cli) == "") {
		$dataReady = false;
		echo "debes agregar un nombre";
		echo "<br>";
	}
	if (trim($apellido_cli) == "") {
		$dataReady = false;
		echo "debes agregar un apellido";
		echo "<br>";
	}
	if (trim($fono_cli) == "") {
		$dataReady = false;
		echo "debes agregar un nùmero de contacto";
		echo "<br>";
	}
	if ($despacho_cli && trim($direccion_cli) == "") {
		$dataReady = false;
		echo "debes agregar una dirección para el despacho";
		echo "<br>";
	}	
	if(!$dataReady){				
		echo '<button onclick="goback();">Volver</button>';		
		echo "<br>";
	}else{

			$productos = $_POST["cantidad_productos"];
			$productos_id = explode(",", $productos);
			$elements = "0";
			$rolls = array();	
			$bebestible = array();	
			foreach ($productos_id as $key => $value) {		
				if($value != ""){
					if( isset($_POST[$value]) == true && $_POST[$value] > 0 ){				
						$current = array('roll' => mysqli_fetch_assoc(getRollsById($value)), 'cantidad' => $_POST[$value]);
						array_push($rolls, $current);
					}													
				}
			}	
			
			echo $bebida;

			if( $bebida != -1){				
						$current = array('bebestible' => mysqli_fetch_assoc(getBebestibleById($bebida)) , 'cantidad' => 1);
						array_push($bebestible, $current);
			}

			if(count($rolls) <= 0){
				echo "Debes seleccionar algun roll para proceder";
				echo "<br>";				
				echo '<button onclick="goback();">Volver</button>';
			}else{
				$datos = array('cliente' => array('nombre' => $nombre_cli, 'apellido' => $apellido_cli, 'fono' => $fono_cli, 'despacho' => $despacho_cli, 'direccion' => $direccion_cli), 'rolls' => array($rolls), 'bebestible' => $bebestible);					
				$_SESSION['shopingCar'] = $datos;
				header('Location: detalle_pedido.php');
			}
		}
?>
