<!DOCTYPE html>
<html>
<head>
	<title>Facebook - entre ou cadastre-se</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>facebook</h2>
			</div><!--logo-->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>Email ou telefone</p>
					<input type="email" name="email">
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha</p>
					<input type="password" name="senha">
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">
				</div><!--form-element-->
			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>
	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
				<img src="mundo.png">
			</div><!--img-pessoas-->
			<div class="abrir-conta">
				<h2 class="abra-uma-conta">Abra uma conta</h2>
				<h3>É rápido e fácil.</h3>
				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text" name="nome">
					</div><!--W50-->
					<div class="w50">
						<input placeholder="Sobrenome" type="text" name="sobrenome">
					</div><!--W50-->
					<div class="w100">
						<input placeholder="Celular ou email" type="email" name="email">
					</div><!--W100-->
					<div class="w100">
						<input placeholder="Nova senha" type="password" name="senha">
					</div><!--W100-->
					<div class="w100">
						<h2>Data de nascimento</h2>
						<select name="nascimento-dia" class="nascimento">
							<option value="Dia">Dia</option>
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option value="0">Mês</option>
							<option value="1">Jan</option>
							<option value="2">Fev</option>
							<option value="3">Mar</option>
							<option value="4">Abr</option>
							<option value="5">Mai</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Ago</option>
							<option value="9">Set</option>
							<option value="10">Out</option>
							<option value="11">Nov</option>
							<option value="12">Dez</option>
						</select>
						<select name="nascimento-ano" class="nascimento">
							<option value="Ano">Ano</option>
							<?php
								for($i = 2020; $i >= 1905; $i--){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class="clear"></div>
					</div><!--w100-->
					<div class="w100">
						<h2>Gênero</h2>
						<div class="input-radio">
							<input type="radio" name="genero" value="Masculino">
							<h2>Masculino</h2>
						</div><!--input-radio-->
						<div class="input-radio">
							<input type="radio" name="genero" value="Feminino">
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="input-radio">
							<input type="radio" name="genero" value="Personalizado">
							<h2>Personalizado</h2>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->
					<div class="w100">
						<input type="submit" name="acao1" value="Cadastre-se">
					</div><!--w100-->
					<div class="clear"></div>
				</form><!--create-account-->
			</div><!--abrir-conta-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (Brasil)</a>
			<a href="#">English (US)</a>
			<a href="#">Español</a>
			<a href="#">Français (France)</a>
			<a href="#">Italiano</a>
			<a href="#">العربية</a>
			<a href="#">Deutsch</a>
			<a href="#">हिन्दी</a>
			<a href="#">中文(简体)</a>
			<a href="#">日本語</a>
		</div><!--center-->
		<div style="border: 0; padding-top: 10px;" class="center">
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
		</div><!--center-->
	</section><!--linguas-->
</body>
</html>