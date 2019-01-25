<?php

	//verifica se existe valor na $url
	$url = isset($_POST['nUrl'])?$_POST['nUrl']:'http://gabrieljonatas.com.br';

	//verifica se existe http://
	if (!strstr($url, 'http://')){
		$url = 'http://'.$url;
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gabriel Jônatas - Teste Responsivo</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Criação de website, blogs e lojas virtuais.">
	<link type="canonical" href="http://www.gabrieljonatas.com.br/">
	<meta name="author" content="Gabriel Jônatas">
	<meta name="robots" content="index, nofollow">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
		h1 {
			text-align: center;
			color: #fff;
			text-shadow: 0px -2px 3px #000;
			margin-top: 30px;
		}
		.debug {
			border: 1px solid red;
		}
		img {
			margin: 0px 10px;
		}
		iframe {
			display: block;
			margin: auto;
		}
	</style>
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script>
		//funcionamento dos botoes
		function redimencionar(dispositivo){
			
			if (dispositivo == 'pc') {
				document.getElementById("iFrame").style.width = "1900px";
				document.getElementById("iFrame").style.height = "1080px";
			} else if (dispositivo == 'note') {
				document.getElementById("iFrame").style.width = "1366px";
				document.getElementById("iFrame").style.height = "768px";
			} else if (dispositivo == 'tablet') {
				document.getElementById("iFrame").style.width = "1280px";
				document.getElementById("iFrame").style.height = "800px";
			} else if (dispositivo == 'celular') {
				document.getElementById("iFrame").style.width = "480px";
				document.getElementById("iFrame").style.height = "600px";
			}
		}
	</script>
</head>
<body>
	
	<section>
		<div class="container">
			<h1>Teste Responsivo!</h1>
			<div class="row justify-content-center m-2">
				<div class="col-12">
					<div class="d-flex justify-content-center">
					<img src="img/icone_pc.png" onclick="redimencionar('pc')" alt="1900 x 1080">
					<img src="img/icone_note.png" onclick="redimencionar('note')" alt="1366 x 768">
					<img src="img/icone_tablet.png" onclick="redimencionar('tablet')" alt="1280 x 800">
					<img src="img/icone_celular.png" onclick="redimencionar('celular')" alt="480 x 600">
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-5 mb-2">
				<div class="col-12">
					<form class="input-group" method="post">
						<input type="text" class="form-control" name="nUrl" id="iUrl" placeholder="<?php echo $url; ?>">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default">Testar</button>
						</span>
					</form>
				</div>
			</div>
		</div>
		<iframe src="<?php echo $url; ?>" width="100%" height="800" id="iFrame"></iframe>
	</section>

</body>
</html>