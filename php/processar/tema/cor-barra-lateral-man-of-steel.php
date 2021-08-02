<?php
	include_once("../../../php/database/config.php");

	if(isset($_REQUEST["id"]))
	{
		$id=$_REQUEST["id"];
		
		$query = mysqli_query($con,"select * from accounts where id='$id'");
		$row = mysqli_fetch_array($query);
	}

$cor        		 = 'man-of-steel';
	
	$busca = mysqli_query($con, "SELECT * FROM accounts WHERE id = '$id'"); 
	$result_usuario = "UPDATE accounts SET sidebar_color ='$cor' WHERE id='$id'";
	$resultado_usuario = mysqli_query($con, $result_usuario);
	
	if(mysqli_affected_rows($con) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../editar-tema.php'>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../editar-tema.php'>
				";	
			}
?>
