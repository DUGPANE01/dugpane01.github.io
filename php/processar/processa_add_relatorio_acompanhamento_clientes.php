<?php
 //Conexão com o banco de dados
	include_once("../../php/database/config.php");
 

$cliente        		 = $_POST['cliente'];
$maquina        		 = $_POST['maquina'];
$celula         		 = $_POST['celula'];
$tipo_oleo				 = $_POST['tipo_oleo'];
$indice_refracao	     = $_POST['indice_refracao'];
$emulcao_tanque	 		 = $_POST['emulcao_tanque'];
$mes					 = $_POST['mes'];
$data					 = $_POST['data'];
$obs					 = $_POST['obs'];



   $insereDados = mysqli_query($con ,"INSERT INTO relatorio_acompanhamento_clientes(cliente, maquina, celula, tipo_oleo, indice_refracao, emulcao_tanque, mes, data, obs)
                                       VALUES('$cliente', '$maquina', '$celula', '$tipo_oleo', '$indice_refracao', '$emulcao_tanque', '$mes', '$data', '$obs')");



if($insereDados):
 header('Location: ../../relatorio-acompanhamento-clientes.php');
else:
   header('Location: erro.php');
endif;

?>


