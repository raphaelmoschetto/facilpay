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
	<title>DIH+ | Fácil Pay</title>
</head>
<body>
	<?php include("includes/header.php"); ?>
	
	<div id="bg-titulo">
		<h1 class="container">DIH+</h1>
		<div class="container breadcrumbs"><a href="index.php" title="Fácil Pay">Fácil Pay</a> > DIH+</div>
	</div>

	<div class="banner-interno banner-dih">
		<div class="col-md-5 col-md-offset-7">
			<img src="images/logo-dih.png" class="img-responsive" />
			<p class="col-md-11 col-lg-8">UMA ASSISTÊNCIA EM SAÚDE COMPLETA PARA TODA A FAMÍLIA</p>
		</div>
	</div>

	<div class="container">

		<div class="row">

			<div class="main-content dih col-xs-12">

				<div class="col-md-4 col-sm-5 vantagens">
					<img src="images/vantagens-facilpay.png" alt="Cartão Fácil Pay" class="img-responsive" />
				</div>

				<div class="col-md-7 col-sm-7 texto">
					<h2>OBTENHA RENDA COMPLEMENTAR</h2>
					<p>Adquirindo a solução <strong>Fácil Pay</strong> você aceita débito, crédito e gera renda complementar a cada 10 planos <strong>DIH+</strong> vendidos por mês.</p>
				</div>
					
			</div>
		</div>
	</div>

	<div class="container-fluid sobre-dih">
		
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<h2 class="col-md-10 col-md-offset-2">O QUE É O DIH+?</h2>
					<ul class="col-md-12">
						<li>
							<div class="col-md-2 col-sm-3">
								<i class="internacao"></i>
							</div>
							<span class="col-md-10 col-sm-9">
								<p class="row">
									É um pacote completo de assistência em saúde familiar que oferece R$100,00 por dia em caso de internação hospitalar.
									<br/><br/><br/>
									E até <strong>70% de desconto</strong> em:
								</p>
							</span>
						</li>
						<li>
							<div class="col-md-2 col-sm-3">
								<i class="consulta"></i>
							</div>
							<span class="col-md-10 col-sm-9">
								<p class="row">
									<strong>Consultas médicas</strong>
								</p>
							</span>
						</li>
						<li>
							<div class="col-md-2 col-sm-3">
								<i class="dentista"></i>
							</div>
							<span class="col-md-10 col-sm-9">
								<p class="row">
									<strong>Dentistas</strong>
								</p>
							</span>
						</li>
						<li>
							<div class="col-md-2 col-sm-3">
								<i class="exame"></i>
							</div>
							<span class="col-md-10 col-sm-9">
								<p class="row">
									<strong>Exames</strong>
								</p>
							</span>
						</li>
						<li>
							<div class="col-md-2 col-sm-3">
								<i class="medicamento"></i>
							</div>
							<span class="col-md-10 col-sm-9">
								<p class="row">
									<strong>Medicamentos</strong> (E-pharma)
								</p>
							</span>
						</li>

					</ul>
				</div>
			</div>
		</div>

	</div>

	<?php include("includes/footer.php"); ?>
</body>
</html>