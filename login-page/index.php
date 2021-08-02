<!DOCTYPE html>
<html lang="en">
<head>
	<title>- PAINEL | ENTRAR</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg'); background-size: cover;">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form method="POST" action="../php/login/authenticate.php" class="login100-form validate-form">
					<div class="login100-form-avatar">
						<center><img src="images/logo.png" alt="LOGO"></center>
					</div>
					<br>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Obrigatório">
						<input class="input100" type="username" name="username" id="username" class="form-control" placeholder="Usuário" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Obrigatório">
						<input class="input100" type="password" name="password" id="password" class="form-control" placeholder="Senha" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

					
					
					
					
					
					
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							<? $frases = array(
  					"As pedras que hoje atrapalham sua caminhada amanhã enfeitarão sua estrada",
  					"Acredite em si próprio e chegará um dia em que os outros não terão outra escolha senão acreditar com você",
					"Não tenha medo da mudança. Coisas boas se vão para que melhores possam vir",
  					"Não desiste, vá em frente. Sempre há uma chance de você tropeçar em algo maravilhoso",
  					"Sonhe. Lute. Conquiste. Tudo é possível. Você nasceu para vencer",
					"No fim tudo dá certo. Se não deu certo é porque ainda não chegou ao fim",
					"Nas horas difíceis, jamais baixe a cabeça. A solução para o problema não está no chão, mas sim na sua determinação",
					"Acredite que você pode, assim você já está no meio do caminho",
					"Realize o óbvio, pense no improvável e conquiste o impossível",
					"Vencedor não é aquele que sempre vence, mas sim aquele que nunca deixa de lutar",
					"Já experimentou acreditar em você? Tente! Você não faz ideia do que é capaz",
					"Você nunca sabe que resultados virão da sua ação. Mas se você não fizer nada, não existirão resultados",
					"Imagine uma nova história para sua vida e acredite nela",
	 				"Lute pelos seus sonhos, acredite nos seus objetivos. Batalhe pelos seus ideais e mostre que você é um guerreiro"
					);

// ordenar o array randomicamente
srand ((float)microtime()*1000000);
shuffle ($frases);

// mostrar o 1o. elemento do array, que será randômico
echo "<b>Pensamento da vez:</b><br> " .$frases[0];
?>
						</a>
					</div>
				</form>
				<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>