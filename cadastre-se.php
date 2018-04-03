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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"
	    crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"
	    crossorigin="anonymous">
	<!-- CSS personalizado -->
	<link href="css/style.css?<?=time()?>" type="text/css" rel="stylesheet" />
	<title>Cadastre-se | Fácil Pay</title>
</head>

<body>
	<?php include("includes/header.php"); ?>

	<div id="bg-titulo">
		<h1 class="container">CADASTRE-SE</h1>
		<div class="container breadcrumbs">
			<a href="index.php" title="Fácil Pay">Fácil Pay</a> > Cadastre-se</div>
	</div>

	<div class="banner-interno banner-cadastre"></div>

	<div class="container">

		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4 links-cad">
			<div class="row">
				<a id="cad-fisica" title="Pessoa Física" class="col-md-6 col-xs-12 active">
					<span>PESSOA FÍSICA</span>
				</a>
				<a id="cad-juridica" title="Pessoa Jurídica" class="col-md-6 col-xs-12">
					<span>PESSOA JURÍDICA</span>
				</a>
			</div>
		</div>
	</div>

	<div id="pessoa-fisica">
		<?php include("includes/cadastro-pessoa-fisica.php"); ?>
	</div>

	<div id="pessoa-juridica" style="display:none;">
		<?php include("includes/cadastro-pessoa-juridica.php"); ?>
	</div>

		<div class="bg-grey-cadastro">
		<div class="container">

			<div class="row">

				<div class="col-md-4 col-xs-12 titulo-form">

					<h2>3. <p>CONCLUÍDO.<br class="hidden-xs"/> AGUARDE<br class="hidden-xs hidden-sm"/> CONFIRMAÇÃO<br class="hidden-xs hidden-sm"/> POR E-MAIL.</p></h2>

				</div><!--.titulo-form-->

				<div class="col-md-8 col-xs-12 finalizado">
					<p>Prezado(a)</p>
					<h2>Antonio Carlos da Silva</h2>
					<div id="itens" class="col-xs-12">
						<p>Você contratou os seguintes itens:</p><br/>
						<div class="col-sm-4 text-center">
							<img src="images/maquina.png" class="img-responsive" alt="Máquina FácilPay" />
						</div>
						<div class="col-sm-2">
							<span>+</span>
						</div>
						<div class="col-sm-3 text-center">
							<img src="images/cartao-pay.png" alt="Cartão FácilPay" width="118" class="img-responsive" />
							<p>Cartão <strong>Fácil Pay</strong> Mastercard</p>
						</div>
						
					</div>
					
					<p>
						Estamos avaliando o seu cadastro e em breve, você receberá um retorno nosso por e-mail.
						<br/>
						Obrigado por escolher <strong>Fácil Pay</strong>.
					</p>
					
					<div class="obrigatorio col-xs-12 col-sm-9">
						<button type="button" class="float-right">VOLTAR PARA O CADASTRO</button>
					</div>

					<div class="obrigatorio col-xs-12 col-sm-3 text-center">
						<button type="button" class="float-right">CONFIRMAR</button>
					</div>

				</div>				

			</div>

		</div>
	</div><!--.bg-grey-cadastro-->

	<?php include("includes/footer.php"); ?>
	
	<script>
		$(document).ready(function () {
			$('#cad-fisica').click(function () {
				$('#pessoa-juridica').hide();
				$('#pessoa-fisica').fadeIn('slow');
				$('#cad-fisica').addClass('active');
				$('#cad-juridica').removeClass('active');
			});

			$('#cad-juridica').click(function () {
				$('#pessoa-fisica').hide();
				$('#pessoa-juridica').fadeIn('slow');  
				$('#cad-juridica').addClass('active');
				$('#cad-fisica').removeClass('active');   
			});

			$('#entregar_endereco_alt').click(function() { 
				if ($(this).is(':checked')) {
					$('.input-alternativo').prop('disabled', false);
				} else {
					$('.input-alternativo').prop('disabled', 'disabled');
				}
			});

			$('#entregar_endereco_alt_pj').click(function() { 
				if ($(this).is(':checked')) {
					$('.input-alternativo_pj').prop('disabled', false);
				} else {
					$('.input-alternativo_pj').prop('disabled', 'disabled');
				}
			});

			$("#escolha_cartao_pay,#escolha_cc").change(function () {
				if ($("#escolha_cartao_pay").is(":checked")) {
					$('#forma_cc').hide();
					$('#forma_cartao').fadeIn('slow');
				}
				else if ($("#escolha_cc").is(":checked")) {
					$('#forma_cartao').hide();
					$('#forma_cc').fadeIn('slow');
				}
			});

			$("#escolha_cartao_pay_pj,#escolha_cc_pj").change(function () {
				if ($("#escolha_cartao_pay_pj").is(":checked")) {
					$('#forma_cc_pj').hide();
					$('#forma_cartao_pj').fadeIn('slow');
				}
				else if ($("#escolha_cc_pj").is(":checked")) {
					$('#forma_cartao_pj').hide();
					$('#forma_cc_pj').fadeIn('slow');
				}
			});       
		});
	</script>
</body>

</html>