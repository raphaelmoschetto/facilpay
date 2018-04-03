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
	<title>Trabalhe na Fácil Pay | Fácil Pay</title>
</head>
<body>
	<?php include("includes/header.php"); ?>
	
	<div id="bg-titulo">
		<h1 class="container">TRABALHE NA FÁCIL PAY</h1>
		<div class="container breadcrumbs"><a href="index.php" title="Fácil Pay">Fácil Pay</a> > Trabalhe na Fácil Pay</div>
	</div>

	<div class="banner-interno banner-trabalhe"></div>

	<div class="container">
		<div class="main-content trabalhe col-xs-12 col-sm-12 col-md-8 col-md-offset-4">

			<p>
				Nós da Fácil Pay abrimos um mundo de possibilidades para sua carreira e o seu desenvolvimento profissional. Você quer desenvolver o seu talento? Nós temos as oportunidades.
				<br/><br/>
				Venha conquistar esse mundo com a gente!
			</p>
			<form role="form" type="post">

					<div class="form-group">
						 
						<input type="text" name="nome" id="nome" class="form-control input-lg" placeholder="NOME" required>
					</div>
					
					<div class="form-group">
						 
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-MAIL" required>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="form-group">
								 
								<input type="text" name="nascimento" id="nascimento" class="form-control input-lg" placeholder="DATA DE NASCIMENTO" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="form-group">
								 
								<select name="sexo" id="sexo" class="form-control input-lg">
									<option value="">SEXO</option>
									<option value="masculino">MASCULINO</option>
									<option value="feminino">FEMININO</option>
								</select>
							</div>
						</div>
					</div><!--row-->

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
								<div class="form-group">
									
									<input type="text" name="estado_civil" id="estado_civil" class="form-control input-lg" placeholder="ESTADO CIVIL" required>
								</div>
							</div>

							<div class="col-xs-4 col-sm-2 col-md-2">
								<div class="form-group">
									
									<input type="tel" name="ddd_cel" id="ddd_cel" class="form-control input-lg" placeholder="DDD" required>
								</div>
							</div>
							<div class="col-xs-8 col-sm-10 col-md-4">
								<div class="form-group">
									<input type="tel" name="cel" id="cel" class="form-control input-lg" placeholder="CELULAR" required>
								</div>
						</div>
					</div><!--.row-->

					<div class="form-group">
						
						<input type="text" name="endereco" id="endereco" class="form-control input-lg" placeholder="ENDEREÇO" required>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="form-group">								
								<input type="text" name="cep" id="cep" class="form-control input-lg" placeholder="CEP" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-9">
							<div class="form-group">
								 
								<input type="text" name="cidade" id="cidade" class="form-control input-lg" placeholder="CIDADE" required>
							</div>
						</div>
					</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8">
						<div class="form-group">
							<label for="file">ANEXAR CURRÍCULO</label>
							<input type="file" name="anexo" id="anexo" class="form-control input-lg" placeholder="ANEXAR CURRÍCULO" required>
						</div>
					</div>

					<div class="obrigatorio col-xs-12 col-sm-12 col-md-12">
						* Todos os campos são de preenchimento obrigatório.
						<br class="hidden-sm hidden-md hidden-lg" />
						<br class="hidden-sm hidden-md hidden-lg" />
						<br class="hidden-sm hidden-md hidden-lg" />
						<input type="submit" value="CONTINUAR" class="btn float-right">
					</div>

				</div>

				</form>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>
</body>
</html>