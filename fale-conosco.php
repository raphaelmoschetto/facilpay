<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<!-- FONTE GOOGLE -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<!-- CDN GOOGLE -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<!-- CONDI??O PARA PEGAR DO SITE -->
	<script>
		window.jQuery || document.write("<script src='js/jquery.min.js'>" + "<" + "/script>");
	</script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	    crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
		crossorigin="anonymous" />
	<!-- FontAweSome Free CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
	<!-- CSS personalizado -->
	<link href="css/style.css?<?=time()?>" type="text/css" rel="stylesheet" />
	<title>Fale Conosco | Fácil Pay</title>
</head>
<body>
	<?php include("includes/header.php"); ?>
	
	<div id="bg-titulo">
		<h1 class="container">FALE CONOSCO</h1>
		<div class="container breadcrumbs"><a href="index.php" title="Fácil Pay">Fácil Pay</a> > Fale Conosco</div>
	</div>

	<div class="banner-interno banner-faleconosco"></div>

	<div class="container">
		<div class="main-content fale-conosco col-xs-12 col-sm-12 col-md-8 col-md-offset-4">

			<h2>FORMULÁRIO DE CONTATO</h2>

			<p>Para atendimento preencha o formulário abaixo. Em breve retornaremos o contato.</p>
			<form role="form" type="post">

					<div class="form-group">
						 
						<input type="text" name="nome" id="nome" class="form-control input-lg" placeholder="NOME" required>
					</div>
					
					<div class="form-group">
						 
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-MAIL" required>
					</div>

					<div class="row">
						<div class="col-xs-4 col-sm-2 col-md-2">
							<div class="form-group">
								
								<input type="tel" name="ddd_cel" id="ddd_cel" class="form-control input-lg" placeholder="DDD" required>
							</div>
						</div>
						<div class="col-xs-8 col-sm-10 col-md-5">
							<div class="form-group">
								<input type="tel" name="cel" id="cel" class="form-control input-lg" placeholder="CELULAR" required>
							</div>
						</div>
					</div><!--.row-->
					
					<div class="form-group">
						<textarea class="form-control" rows="5" name="mensagem" id="mensagem" placeholder="MENSAGEM" required></textarea>
					</div>

				<div class="row">

					<div class="obrigatorio col-xs-12 col-sm-12 col-md-12">
						* Todos os campos são de preenchimento obrigatório.
						<br class="hidden-sm hidden-md hidden-lg" />
						<br class="hidden-sm hidden-md hidden-lg" />
						<br class="hidden-sm hidden-md hidden-lg" />
						<input type="submit" value="CONTINUAR" class="btn float-right">
						<input type="reset" value=">> Limpar <<" class="float-right">
					</div>

				</div>

				</form>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>
</body>
</html>