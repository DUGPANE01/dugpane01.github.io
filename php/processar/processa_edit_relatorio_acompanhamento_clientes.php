<?php
	include_once("../../php/database/config.php");

	if(isset($_REQUEST["id"]))
	{
		$id=$_REQUEST["id"];
		
		$query = mysqli_query($con,"select * from relatorio_acompanhamento_clientes where id='$id'");
		$row = mysqli_fetch_array($query);
	}

$cliente        		 = $_POST['cliente'];
$maquina        		 = $_POST['maquina'];
$celula         		 = $_POST['celula'];
$tipo_oleo				 = $_POST['tipo_oleo'];
$indice_refracao	     = $_POST['indice_refracao'];
$emulcao_tanque	 		 = $_POST['emulcao_tanque'];
$mes					 = $_POST['mes'];
$data					 = $_POST['data'];
$obs					 = $_POST['obs'];
	
	$busca = mysqli_query($con, "SELECT * FROM relatorio_acompanhamento_clientes WHERE id = '$id'"); 
	$result_usuario = "UPDATE relatorio_acompanhamento_clientes SET cliente ='$cliente ', maquina ='$maquina ', celula='$celula', tipo_oleo='$tipo_oleo', indice_refracao='$indice_refracao', emulcao_tanque='$emulcao_tanque', mes='$mes', data='$data', obs='$obs' WHERE id='$id'";
	$resultado_usuario = mysqli_query($con, $result_usuario);
	
	if(mysqli_affected_rows($con) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../relatorio-acompanhamento-clientes.php'>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=erro.php'>
				";	
			}
?>
