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
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<title>Fácil Pay</title>
</head>
<body>
	<?php include("includes/header.php"); ?>
	<div id="banner">
		<a href="cadastre-se.php" title="Quer ser cliente? Cadastre-se aqui">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span><p>QUER TER <strong>RENDA COMPLEMENTAR</strong><br class="hidden-xs hidden-sm" /> E MAIS POSSIBILIDADES DE VENDAS?</p><i></i></span>
						<span><p>QUER MOVIMENTAR O DINHEIRO DAS<br class="hidden-xs hidden-sm" /> SUAS VENDAS <strong>SEM TER CONTA EM BANCO</strong>?</p><i></i></span>
						<span><p>QUER USAR O DINHEIRO DAS SUAS<br class="hidden-xs hidden-sm" /> VENDAS PARA <strong>REPOR SEU ESTOQUE</strong>?</p><i></i></span>
					</div><!--col-md-6-->

					<div class="col-md-6">
						<div class="row">
							<div class="fluxo">
								<p>SUA RENDA MERECE ESSA TRANSFORMAÇÃO!<strong>E CONVENIÊNCIA PARA<br class="hidden-xs hidden-sm" /> VOCÊ E SEUS CLIENTES</strong></p>
							</div><!--fluxo-->
						</div><!--row-->
					</div><!--col-md-6-->

					<div class="col-md-6 conv">
						<p><strong>QUER SER CLIENTE?</strong></p>
						<button>CADASTRE-SE AQUI</button>
					</div><!--.conv-->
				</div>
			</div><!--.container-->
		</a>
	</div>
	<!--#banner-->

	<div class="bg-grey">
		<div class="container transforme">
			<div class="row">

				<div class="col-md-4 col-sm-12">
					<h2>
						<strong>TRANSFORME</strong> AGORA O SEU NEGÓCIO <strong class="mini">AQUI VOCÊ PODE!</strong>
					</h2>

					<p>FÁCIL PAY TRAZ UMA CESTA DE SERVIÇOS, CONVENIÊNCIAS E POSSIBILIDADES QUE VÃO MULTIPLICAR A RECEITA DO SEU NEGÓCIO.</p>

					<a href="nossas-solucoes.php" title="Saiba mais">SAIBA MAIS</a>
				
				</div>
				<!--.col-md-4-->


				<div class="col-md-2 col-md-offset-1 text-center itens item-1">
					<i class="fas fa-shopping-basket"></i>

					<span>SERVIÇOS QUE <strong>GERAM RECEITA</strong> ADICIONAL PARA O SEU NEGÓCIO</span>
				
				</div>
				<!--.col-md-3-->

				<div class="col-md-3 text-center itens item-2">

					<img src="images/cartao.png" alt="Cartão" class="img-responsive" />
					
					<span><strong>CARTÃO PRÉ-PAGO</strong> PARA UTILIZAR O DINHEIRO DAS SUAS VENDAS</span>
				
				</div>
				<!--.col-md-2-->

				<div class="col-md-2 text-center itens item-3">

					<i class="fas fa-cubes"></i>
					
					<span><strong>CAPITAL DE GIRO</strong> PARA REPOSIÇÃO DE ESTOQUE</span>
				
				</div>
				<!--.col-md-3-->

			</div>
			<!--.row-->
		</div>
		<!--.container-->
	</div> 
	<!--.bg-grey-->

	<?php include("includes/footer.php"); ?>
</body>
</html>