<?php
	include_once("../../php/database/config.php");

	if(isset($_REQUEST["id"]))
	{
		$id=$_REQUEST["id"];
		
		$query = mysqli_query($con,"select * from relatorio_acompanhamento_clientes where id='$id'");
		$row = mysqli_fetch_array($query);
	}



	$busca = mysqli_query($con, "SELECT * FROM relatorio_acompanhamento_clientes WHERE id = '$id'"); 
	$result_usuario = "DELETE from relatorio_acompanhamento_clientes WHERE id='$id'";
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
