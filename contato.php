<?php
	include('header.php');
?>
		<section>
		<form action="" method="post" class="needs-validation" novalidate>
		<div class="container">
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label >Nome</label>
			  <input type="text" name="nome" class="form-control borda" value="<?=( isset( $_POST['nome'] ) ? $_POST['nome'] : '' );?>" placeholder="NOME" required>
			  
			    <div class="invalid-feedback">
				  Informe o seu nome
				</div>
				<div class="valid-feedback">
					Perfeito!
				</div>
			  
			</div>
			<div class="form-group col-md-6">
			  <label >Telefone</label>
			  <input type="tel" name="telefone" class="form-control borda1" value="<?=( isset( $_POST['telefone'] ) ? $_POST['telefone'] : '' );?>" placeholder="TELEFONE" required>
			  
				<div class="invalid-feedback">
				  Informe o seu telefone
				</div>
				
				<div class="valid-feedback">
					Perfeito!
				</div>
				
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label >E-mail</label>
			  <input type="email" name="email" class="form-control borda" value="<?=( isset( $_POST['email'] ) ? $_POST['email'] : '' );?>" placeholder="E-MAIL" required>
			  
			  <div class="invalid-feedback">
				  Informe o seu e-mail
				</div>
				
				<div class="valid-feedback">
					Perfeito!
				</div>
				
			</div>
			<div class="form-group col-md-6">
			  <label >ASSUNTO</label>
			  <input type="text" name="assunto" class="form-control borda1" value="<?=( isset( $_POST['assunto'] ) ? $_POST['assunto'] : '' );?>" placeholder="ASSUNTO" required>
			  
			  <div class="invalid-feedback">
				  Informe o assunto do e-mail
				</div>
				
				<div class="valid-feedback">
					Perfeito!
				</div>
				
			</div>
		  </div>
			<div class="form-group">
			  <label >Mensagem:</label>
			  <textarea name="mensagem" class="form-control callaction fundotr" id="areatexto" rows="3" required><?=( isset( $_POST['mensagem'] ) ? $_POST['mensagem'] : '' );?></textarea>
			  
			  <div class="invalid-feedback">
				  Escreva uma mensagem
				</div>
				
				<div class="valid-feedback">
					Perfeito!
				</div>
				
			</div>
			<button type="submit">Enviar</button>
		</div>
		</form>
		</section>
		
		
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php
	include('footer.php');
?>