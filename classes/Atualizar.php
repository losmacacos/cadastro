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