<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Facebook</title>
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>
			</div><!--logo-->
			<form method="past" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone</p>
					<input type="e-mail" name="e-mail" required>
					</div><!--form-element-->

				<div class="form-element">
					<p>Senha</p>
					<input type="password" name="senha" required>
				</div><!--form-element-->

				<div class="form-element">
					<input type="submit" name="ação" value="Entrar">
				</div><!--form-element-->

			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="imagens/png1.png">
			</div><!--img-pessoas-->
			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será!</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text" name="Nome" required>
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text" name="Sobrenome" required>
					</div><!--w50-->

					<div class="w100">
						<input placeholder="E-mail" type="e-mail" name="E-mail" required>
					</div><!--w100-->

					<div class="w100">
						<input placeholder="Senha" type="password" name="Senha" required>
					</div><!--w100-->

					<div class="w100">
						<h3>Data de nascimento:</h3>
						<select name="nascimento-dia" class="nascimento">
							<?php
								for($i = 1; $i <= 31 ; $i++){
							 ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select><!--nascimento-->

						<select name="nascimento-mês" class="nascimento">
							<option value="1">Janeiro</option>
							<option value="2">Fevereiro</option>
							<option value="3">Março</option>
							<option value="4">Abril</option>
							<option value="5">Maio</option>
							<option value="6">Junho</option>
							<option value="7">Julho</option>
							<option value="8">Agosto</option>
							<option value="9">Setembro</option>
							<option value="10">Outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select><!--nascimento-->

						<select name="nascimento-ano" class="nascimento">
							<?php
								for($i = 1940; $i <= 2022 ; $i++){
							 ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select><!--nascimento-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" id="masculino" name="sexo" value="masculino">
							<label for="masculino">Masculino</label>
						</div><!--input-radio-->

						<div class="input-radio">
							<input type="radio" id="feminino" name="sexo" value="feminino">
							<label for="feminino">Feminino</label>
						</div><!--input-radio-->

						<div class="input-radio">
							<input type="radio" id="outro" name="sexo" value="outro">
							<label for="outro">Outro</label>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<input type="submit" name="ação" value="Cadastre-se">
					</div><!--w100-->

				</form><!--criar-conta-->
			</div><!--abrir-conta-->


			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="línguas">
		<div class="center">
			<a class="selected-língua" href="">Português (BR)</a>
			<a href="">Espanõl</a>
			<a href="">English (US)</a>
			<a href="">Français (France)</a>
			<a href="">Deutch</a>
			<a href="">中文 (简化)</a>
			<a href="">日本語</a>
			<a href="">한국어</a>
		</div><!--center-->
	</section><!--línguas-->

	<section class="línguas">
		<div style="border: 0; margin-top: -50px;" class="center">
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
		</div><!--center-->
	</section><!--línguas-->

</body>
</html>