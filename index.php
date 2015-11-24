<!DOCTYPE html>
<html>
<head>
	<title>Burnes King</title>
	<meta charset='utf-8'>

	<meta name="description" content="Burnes King - O lanche mais saboroso de Xanxerê">
	<meta name="keywords" content="bacon, salsicha, frango, catupiry, hamburguer">
	
	<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="colorbox.css">

	<link rel="shortcut icon" type="image/x-icon" href="images/icone.png">

	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>

</head>
<body>

<header>
	<div class="conteudo">
		<a href="index.php" title="Página Inicial" id="logo">
			<img src="images/logo.png" title="Páginal Inicial" alt="HOME">
		</a>

		<nav>
			<ul>
				<li>
					<a href="home" title="Home">Home</a>
				</li>
				<li>
					<a href="sobre" title="Sobre">Sobre</a>
				</li>
				<li>
					<a href="cardapio" title="Cardapio">Cardápio</a>
				</li>
				<li>
					<a href="contato" title="Contato">Contato</a>
				</li>
			</ul>
		</nav>
	</div>
</header>


<?php
	$param = "home";

	if(isset($_GET["param"])){
		$param = $_GET["param"];
	}

	$pagina = "paginas/".$param.".php";

	if(file_exists($pagina)){
		include $pagina;
	}else{;
		include "paginas/erro.php";
	}
?>

<div class="clear"></div>

<footer>
	<p>Desenvolvido por Tidinha - Todos os direitos reservados</p>
	<p>Tidinha nas Redes Sociais:</p>
	<p> 
		<a href="http://www.facebook.com/Tidinha" title="Facebook da Tidinha" class="fa fa-facebook-square fa-3x"></a>
		<a href="http://www.twitter.com" title="Twitter da Tidinha" class="fa fa-twitter-square fa-3x"></a>
		<a href="http://www.instagram.com" title="Instagram" class="fa fa-instagram fa-3x" ></a>
	</p>
</footer>

</body>
</html>