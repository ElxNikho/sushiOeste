<!DOCTYPE html>
<html>
<head>
	<title>Pagado</title>
	<link rel="stylesheet" type="text/css" href="css/menu-style.css">
	<script type="text/javascript">
		function getContextPath(){
			var basepath = window.location.pathname.split("/")[1] + "/" + window.location.pathname.split("/")[2];
			contextpath = "/" + basepath;
			return contextpath;		
		}
		var contador = 5;
		var loop = setInterval(function(){
			document.getElementById('contador').innerHTML = contador;
			contador--;			
			if(contador <= 0){
				window.location.href = getContextPath();
				clearInterval(loop);
			}			
		}, 1000);

	</script>
</head>
<body class="center-content">
	<h1>Su pedido ha sido procesado correctamente.</h1>
	<h3>pago terminado</h3>	
	
		<h3 class="inline-h3">Volviendo al inicio en: </h3> <h3 id="contador" class="inline-h3"> ... </h3>
	
</body>
</html>