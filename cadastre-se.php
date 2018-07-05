<?php  require 'pages/header.php'; ?>
<div class="container">
	<h1>Cadastre-se</h1>
    <?php 
    require 'classes/usuarios.class.php';
    $u = new Usuarios();
    if (isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];
        $telefone = addslashes($_POST['telefone']);
        
        $u->cadastrar();
    }
    ?>
	
	<form method="POST">
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" class="form-control" />
		</div>
		<div class="form-group">
			<label for="email">E-mail: </label>
			<input type="text" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="senha">Senha: </label>
			<input type="password" name="senha" id="senha" class="form-control" />
		</div>
		<div class="form-group">
			<label for="telefone">Telefone: </label>
			<input type="text" name="telefone" id="telefone" class="form-control" />
		</div>
		<input type="submit" value="Cadastrar" class="btn btn-default">
	</form>
</div>
<?php require 'pages/footer.php'; ?>