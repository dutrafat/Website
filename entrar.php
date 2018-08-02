<?php
	include('header.php');
?>
	<section>
		<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
			<img src="img/logoentrar.png" width="200"/>
			<p></p>
			</div>
		</div>
		<div>
			<form action="app.php" method="post">
			  <div class="form-group col-md-4">
				<label for="exampleInputEmail1">Endereço de E-mail</label>
				<input type="email" name="email1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group col-md-4">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group form-check">
				<label class="form-check-label">
					<input type="checkbox" name="manter" class="form-check-input" value="1">
					Salvar usuário
				</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Entrar</button>
			</form>
		</div>
		</div>
	</section>
<?php
	include('footer.php');
?>