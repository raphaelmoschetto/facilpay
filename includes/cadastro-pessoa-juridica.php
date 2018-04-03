<div class="container">

		<div class="col-md-4 titulo-form">

			<h2>1. <p>PREENCHA O CADASTRO</p></h2>

		</div><!--.titulo-form-->

		<div class="main-content col-xs-12 col-sm-12 col-md-8 cadastre">
			<div class="row">
				
			<form role="form" type="post">
					<div class="form-group">
						<span>*</span> 
						<input type="text" name="cnpj" id="cnpj" class="form-control input-lg" placeholder="CNPJ" required>
					</div>

					<div class="form-group">
						<span>*</span> 
						<input type="text" name="ramo_pj" id="ramo_pj" class="form-control input-lg" placeholder="RAMO DE ATIVIDADE" required>
					</div>

					<div class="form-group">
						<span>*</span> 
						<input type="text" name="email_pj" id="email_pj" class="form-control input-lg" placeholder="E-MAIL" required>
					</div>

					<div class="border"></div>

					<div class="row">
						<div class="col-xs-8 col-sm-10 col-md-10">
							<div class="form-group">
								<span>*</span> 
								<input type="text" name="endereco_pj" id="endereco_pj" class="form-control input-lg" placeholder="ENDEREÇO DA SEDE" required>
							</div>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2">
							<div class="form-group">
								<span>*</span> 
								<input type="text" name="numero_pj" id="numero_pj" class="form-control input-lg" placeholder="Nº" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="form-group">
								<span>*</span> 
								<input type="text" name="cep_pj" id="cep_pj" class="form-control input-lg" placeholder="CEP" required>
							</div>
						</div>
						<div class="col-xs-8 col-sm-6 col-md-7">
							<div class="form-group">
								<span>*</span> 
								<input type="text" name="cidade_pj" id="cidade_pj" class="form-control input-lg" placeholder="CIDADE" required>
							</div>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2">
							<div class="form-group">
								<span>*</span> 
								<input type="text" name="uf_pj" id="uf_pj" class="form-control input-lg" placeholder="UF" required>
							</div>
						</div>
					</div>

				<div class="row form-grey">

					<div class="col-md-12">
						<div class="form-group">
							<input type="checkbox" value="Sim" id="entregar_endereco_alt_pj" name="entregar_endereco_alt_pj" /> Entregar o <strong></strong>POS Fácil Pay</strong> em um endereço diferente do informado no cadastro:
						</div>
					</div>

					<div class="col-xs-8 col-sm-10 col-md-10">
							<div class="form-group">
								<span>*</span> 
								<input type="text" name="endereco_alt_pj" id="endereco_alt_pj" class="form-control input-lg input-alternativo_pj" placeholder="ENDEREÇO" disabled>
							</div>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2">
							<div class="form-group">
								<span>*</span> 
								<input type="text" name="numero_alt_pj" id="numero_alt_pj" class="form-control input-lg input-alternativo_pj" placeholder="Nº" disabled>
							</div>
						</div>

					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="form-group">
							<span>*</span> 
							<input type="text" name="cep_alt_pj" id="cep_alt_pj" class="form-control input-lg input-alternativo_pj" placeholder="CEP" disabled>
						</div>
					</div>
					<div class="col-xs-8 col-sm-6 col-md-7">
						<div class="form-group">
							<span>*</span> 
							<input type="text" name="cidade_alt_pj" id="cidade_alt_pj" class="form-control input-lg input-alternativo_pj" placeholder="CIDADE" disabled>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 col-md-2">
						<div class="form-group">
							<span>*</span> 
							<input type="text" name="uf_alt_pj" id="uf_alt_pj" class="form-control input-lg input-alternativo_pj" placeholder="UF" disabled>
						</div>
					</div>
	
				</div><!--.form-grey-->

				
				<div class="form-group">
					<span>*</span> 
					<input type="text" name="razao_social" id="razao_social" class="form-control input-lg" placeholder="RAZÃO SOCIAL" required>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="form-group">
							<span>*</span> 
							<input type="text" name="fundacao" id="fundacao" class="form-control input-lg" placeholder="DATA DE FUNDAÇÃO" required>
						</div>
					</div>
				</div><!--row-->

				<div class="form-group">
					<span>*</span> 
					<input type="text" name="nome_responsavel_pj" id="nome_responsavel_pj" class="form-control input-lg" placeholder="NOME DO RESPONSÁVEL" required>
				</div>

				<div class="form-group">
					<span>*</span> 
					<input type="text" name="cpf_responsavel_pj" id="cpf_responsavel_pj" class="form-control input-lg" placeholder="CPF DO RESPONSÁVEL" required>
				</div>

				<div class="row">
						<div class="col-xs-3 col-sm-3 col-md-2">
							<div class="form-group">
								<span>*</span> 
								<input type="tel" name="ddd_fixo_pj" id="ddd_fixo_pj" class="form-control input-lg" placeholder="DDD" required>
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-3">
							<div class="form-group">
								<input type="tel" name="tel_fixo_pj" id="tel_fixo_pj" class="form-control input-lg" placeholder="TELEFONE FIXO" required>
							</div>
						</div>

						<div class="col-xs-3 col-sm-3 col-md-2">
							<div class="form-group">
								<span>*</span> 
								<input type="tel" name="ddd_celular_pj" id="ddd_celular_pj" class="form-control input-lg" placeholder="DDD" required>
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-3">
							<div class="form-group">
								<input type="tel" name="celular_pj" id="celular_pj" class="form-control input-lg" placeholder="CELULAR" required>
							</div>
						</div>
					</div><!--.row-->
					
				<div class="border"></div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<span>*</span> 
							<input type="text" name="excepctativa_faturamento_pj" id="excepctativa_faturamento_pj" class="form-control input-lg" placeholder="EXPECTATIVA DE FATURAMENTO MENSAL" required>
						</div>
					</div>

					<div class="obrigatorio col-xs-12 col-sm-12 col-md-12">
						* Campos de preenchimento obrigatório
						<br class="hidden-sm hidden-md hidden-lg" />
						<br class="hidden-sm hidden-md hidden-lg" />
						<br class="hidden-sm hidden-md hidden-lg" />
						<input type="submit" value="CONTINUAR" class="btn float-right">
					</div>

				</div>

					

				</form>
			</div>
		</div>

	</div><!--.container-->

	<div class="bg-grey-cadastro">
		<div class="container">

			<div class="row">

				<div class="col-md-4 col-xs-12 titulo-form">

					<h2>2. <p>ESCOLHA COMO VOCÊ QUER <strong>RECEBER O CRÉDITO</strong> DAS SUAS VENDAS.</p></h2>

				</div><!--.titulo-form-->

				<div class="col-md-4 col-sm-6 escolha">

					<img src="images/cartao-pay.png" alt="Cartão Fácil Pay" class="img-responsive" />
					<br/>
					<label><input type="radio" value="Cartão Fácil Pay MasterCard" name="escolha_forma_pj" id="escolha_cartao_pay_pj" checked /> Cartão <strong>Fácil Pay</strong> Mastercard</label>

				</div>

				<div class="col-md-4 col-sm-6 escolha text-center">

					<i class="fas fa-university"></i>
					<br/>
					<label class="label-2"><input type="radio" value="Conta corrente bancária" name="escolha_forma_pj" id="escolha_cc_pj" /> Conta corrente bancária</label>

				</div>				

			</div>

		</div>
	</div><!--.bg-grey-cadastro-->

	<div class="container">
		<div class="row">
			<div id="forma_cartao_pj" class="col-md-8 col-md-offset-4 form-conta-corrente">
				<form role="form" class="form-horizontal">
					<p>
						Você optou em receber através do cartão <strong>Fácil Pay</strong> Mastercard
						<br/>
						<br/>
						
					</p>

					<div class="container-termos">

						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis tellus nec metus hendrerit, at semper quam pharetra. Fusce sodales tellus sit amet erat hendrerit pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam nibh ut nulla tempus finibus. Nulla aliquet metus quis odio venenatis, at viverra odio tincidunt. Pellentesque cursus malesuada fringilla. Nulla tempor eu leo eu sodales.<br/><br/>

						Duis condimentum facilisis mattis. Cras vitae molestie eros. Morbi pellentesque, libero et condimentum mattis, dolor mauris convallis tortor, eu consectetur orci magna in sem. Aenean iaculis, purus eget consequat ultricies, justo lectus vulputate dui, pellentesque sodales urna nunc eu metus. Nulla facilisi. Sed vitae porta ex. Ut posuere arcu felis, non iaculis urna laoreet sit amet. Pellentesque leo eros, viverra at dolor quis, lobortis varius lorem. Maecenas a dui ac lorem aliquet semper. Nunc accumsan nisl sit amet nibh pellentesque accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque lorem sapien, interdum consectetur dictum nec, tristique sit amet neque. Vivamus eget sollicitudin nisl.<br/><br/>

						Curabitur quis ultricies nunc, eu commodo nunc. Quisque consequat, diam ac cursus commodo, arcu lectus fermentum magna, ac consequat dui nisi vel massa. Mauris sed condimentum libero. Integer fringilla dictum sodales. Pellentesque mattis est turpis, non sagittis sapien porttitor vitae. Fusce sem orci, mattis eget ipsum non, varius lobortis quam. Duis rutrum mauris sed odio feugiat dapibus. Curabitur vitae aliquam tellus. Etiam erat metus, vulputate at tincidunt sed, hendrerit vitae lacus. Proin tristique metus suscipit, porta neque eu, placerat ipsum. Aliquam condimentum condimentum augue, non placerat elit pulvinar quis. Sed viverra nec est in vehicula. In egestas condimentum placerat.<br/><br/>

						Donec neque mauris, eleifend at nisl quis, lobortis iaculis orci. Fusce dictum mauris ac dignissim elementum. Cras eros felis, faucibus porta orci et, sollicitudin dictum nibh. Morbi id pellentesque tellus. Etiam placerat in elit id pharetra. Aenean congue arcu in lacinia vulputate. Maecenas ut risus congue, tristique mi eget, dictum magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla finibus in turpis eget ornare. Duis dignissim lorem sit amet aliquet posuere. Suspendisse nulla lectus, tempus at quam id, vehicula tempor erat.<br/><br/>

						Vivamus tellus magna, accumsan sed dapibus eu, sollicitudin tincidunt ante. Cras sed convallis quam. Duis volutpat leo arcu, non vehicula sapien tempor aliquam. Maecenas posuere, tortor vitae dictum fringilla, massa augue cursus ipsum, vel lobortis lectus nisi id lacus. Ut lacinia tortor sem, ac vehicula purus finibus non. Fusce accumsan ac purus vitae sagittis. Etiam eu elit at tortor pretium ultrices. Etiam mollis sem nec lacus venenatis condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc a erat interdum, molestie odio ut, venenatis nisl. Pellentesque egestas egestas augue quis rutrum. Curabitur mattis iaculis elit non semper.

					</div><!--.container-form-->
					<input type="checkbox" value="Sim" id="aceita_termos_pj" name="aceita_termos_pj" /> Li e concordo com os termos de uso do cartão <strong>Fácil Pay</strong> Mastercard
					<div class="obrigatorio col-xs-12">
						<button type="button" class="float-right">CONTINUAR</button>
					</div>
				</form>
			</div>

			<div id="forma_cc_pj" class="col-md-8 col-md-offset-4 form-conta-corrente" style="display:none;">
				<form role="form" class="form-horizontal">
					<p>
						Você optou em receber através de conta corrente bancária
						<br/>
						<br/>
						Preencha o formulário abaixo:
					</p>

					<div class="container-form">
					
						<div class="col-md-10 col-md-offset-2">
							<div class="form-group">
								<label for="banco_pj" class="col-sm-4 control-label">Banco</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-lg" id="banco_pj">
								</div>
							</div>
							<div class="form-group">
								<label for="agencia_pj" class="col-sm-4 control-label">Agência</label>
								<div class="col-sm-5 col-md-4 col-lg-5">
									<input type="text" class="form-control input-lg" id="agencia_pj">
								</div>

								<label for="digito_ag_pj" class="col-sm-1 col-md-2  col-lg-1 control-label">Dígito</label>
								<div class="col-sm-2 col-md-2">
									<input type="text" class="form-control input-lg" id="digito_ag_pj">
								</div>
							</div>

							<div class="form-group">
								<label for="conta_corrente_pj" class="col-sm-4 control-label cc">Conta Corrente</label>
								<div class="col-sm-5 col-md-4 col-lg-5">
									<input type="text" class="form-control input-lg" id="conta_corrente_pj">
								</div>

								<label for="digito_cc_pj" class="col-sm-1 col-md-2 col-lg-1 control-label">Dígito</label>
								<div class="col-sm-2">
									<input type="text" class="form-control input-lg" id="digito_cc_pj">
								</div>
							</div>

							<div class="form-group">
								<label for="cpf_titular_pj" class="col-sm-4 control-label cc">CPF do títular da conta</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-lg" id="cpf_titular_pj">
								</div>
							</div>

							<div class="form-group">
								<label for="nome_titular_pj" class="col-sm-4 control-label cc">Nome do títular da conta</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-lg" id="nome_titular_pj">
								</div>
							</div>
						</div>

					</div><!--.container-form-->
					<div class="obrigatorio col-xs-12">
						<button type="button" class="float-right">FINALIZAR</button>
					</div>
				</form>
			</div>
		</div>
	</div>
