<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>PHP OO</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" />
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>
<body>

	<div class="container">

		<?php
				$app->get('/cowsay', function() use($app) {
		  $app['monolog']->addDebug('cowsay');
		  return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
		});
		$usuario = new Usuarios();

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$endereco = $_POST['endereco'];
			$numero = $_POST['numero'];
			$bairro = $_POST['bairro'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$cep = $_POST['cep'];
			$nomeMae = $_POST['nomeMae'];
			$nomePai = $_POST['nomePai'];
			$numRG = $_POST['numRG'];
			$numCPF = $_POST['numCPF'];
			$dataNasc = $_POST['dataNasc'];
			$sexo = $_POST['sexo'];
			$modalidade = $_POST['modalidade'];

			$usuario->setNome($nome);
			$usuario->setEmail($email);
			$usuario->setSenha($senha);
			$usuario->setEndereco($endereco);
			$usuario->setNumero($numero);
			$usuario->setBairro($bairro);
			$usuario->setCidade($cidade);
			$usuario->setEstado($estado);
			$usuario->setCep($cep);
			$usuario->setNomeMae($nomeMae);
			$usuario->setNomePai($nomePai);
			$usuario->setNumRG($numRG);
			$usuario->setNumCPF($numCPF);
			$usuario->setDataNasc($dataNasc);
			$usuario->setSexo($sexo);
			$usuario->setModalidade($modalidade);

			# Insert
			if($usuario->insert()){
				echo "Inserido com sucesso!";
			}

		endif;

		?>
		<header class="masthead">
			<h1 class="muted">PHP OO</h1>
			<nav class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="active"><a href="index.php">Página inicial</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<?php 
		if(isset($_POST['atualizar'])):

			$id = $_POST['id'];
			
			$nome  = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$endereco = $_POST['endereco'];
			$numero = $_POST['numero'];
			$bairro = $_POST['bairro'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$cep = $_POST['cep'];
			$nomeMae = $_POST['nomeMae'];
			$nomePai = $_POST['nomePai'];
			$numRG = $_POST['numRG'];
			$numCPF = $_POST['numCPF'];
			$dataNasc = $_POST['dataNasc'];
			$sexo = $_POST['sexo'];
			$modalidade = $_POST['modalidade'];

			$usuario->setNome($nome);
			$usuario->setEmail($email);
			$usuario->setSenha($senha);
			$usuario->setEndereco($endereco);
			$usuario->setNumero($numero);
			$usuario->setBairro($bairro);
			$usuario->setCidade($cidade);
			$usuario->setEstado($estado);
			$usuario->setCep($cep);
			$usuario->setNomeMae($nomeMae);
			$usuario->setNomePai($nomePai);
			$usuario->setNumRG($numRG);
			$usuario->setNumCPF($numCPF);
			$usuario->setDataNasc($dataNasc);
			$usuario->setSexo($sexo);
			$usuario->setModalidade($modalidade);

			if($usuario->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($usuario->delete($id)){
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $usuario->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="E-mail:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="senha" value="<?php echo $resultado->senha; ?>" placeholder="Senha:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="endereco" value="<?php echo $resultado->endereco; ?>" placeholder="Endereco:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="numero" value="<?php echo $resultado->numero; ?>" placeholder="Numero:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="bairro" value="<?php echo $resultado->bairro; ?>" placeholder="Bairro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cidade" value="<?php echo $resultado->cidade; ?>" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="estado" value="<?php echo $resultado->estado; ?>" placeholder="estado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="cep" value="<?php echo $resultado->cep; ?>" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nomeMae" value="<?php echo $resultado->nomeMae; ?>" placeholder="Nome da Mãe:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nomePai" value="<?php echo $resultado->nomePai; ?>" placeholder="Nome do Pai:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="numRG" value="<?php echo $resultado->numRG; ?>" placeholder="RG:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="numCPF" value="<?php echo $resultado->numCPF; ?>" placeholder="CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="dataNasc" value="<?php echo $resultado->dataNasc; ?>" placeholder="Data Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="sexo" value="<?php echo $resultado->sexo; ?>" placeholder="Sexo: " />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="modalidade" value="<?php echo $resultado->modalidade; ?>" placeholder="Modalidade: " />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" placeholder="E-mail:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="senha" placeholder="Senha:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="endereco" placeholder="Endereço:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="numero" placeholder="Número:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="bairro" placeholder="Bairro:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="cidade" placeholder="Cidade:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="estado" placeholder="Estado:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="cep" placeholder="CEP:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="nomeMae" placeholder="Nome da Mãe" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="nomePai" placeholder="Nome do Pai:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="numRG" placeholder="RG:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="numCPF" placeholder="CPF:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="dataNasc" placeholder="Data Nascimento:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="sexo" placeholder="Sexo:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="modalidade" placeholder="Modalidade:" />
			</div>

			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>Nome:</th>
					<th>E-mail:</th>
					<th>Senha:</th>
					<th>Endereço:</th>
					<th>Número:</th>
					<th>Bairro:</th>
					<th>Cidade:</th>
					<th>Estado:</th>
					<th>CEP:</th>
					<th>Nome da Mãe:</th>
					<th>Nome do Pai:</th>
					<th>RG:</th>
					<th>CPF:</th>
					<th>Sexo:</th>
					<th>Modalidade:</th>
				</tr>
			</thead>
			
			<?php foreach($usuario->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->senha; ?></td>
					<td><?php echo $value->endereco; ?></td>
					<td><?php echo $value->numero; ?></td>
					<td><?php echo $value->bairro; ?></td>
					<td><?php echo $value->cidade; ?></td>
					<td><?php echo $value->estado; ?></td>
					<td><?php echo $value->cep; ?></td>
					<td><?php echo $value->nomeMae; ?></td>
					<td><?php echo $value->nomePai; ?></td>
					<td><?php echo $value->numRG; ?></td>
					<td><?php echo $value->numCPF; ?></td>
					<td><?php echo $value->dataNasc; ?></td>
					<td><?php echo $value->sexo; ?></td>
					<td><?php echo $value->modalidade; ?></td>
					<td>
						<?php echo "<a href='index.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='index.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>