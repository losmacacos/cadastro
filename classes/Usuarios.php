<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private $nome;
	private $email;
	private $senha;
	private $endereco;
	private $numero;
	private $bairro;
	private $cidade;
	private $estado;
	private $cep;
	private $nomeMae;
	private $nomePai;
	private $numRG;
	private $numCPF;
	private $dataNasc;
	private $sexo;
	private $modalidade;

	public function insert(){

		$sql  = "INSERT INTO usuarios (nome, email, senha, endereco, numero, bairro, cidade, estado, cep, nomeMae, nomePai, numRG, numCPF, dataNasc, sexo, modalidade) VALUES (:nome, :email, :senha, :endereco, :numero, :bairro, :cidade, :estado, :cep, :nomeMae, :nomePai, :numRG, :numCPF, :dataNasc, :sexo, :modalidade)";
		$stmt = $this->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':nomeMae', $this->nomeMae);
		$stmt->bindParam(':nomePai', $this->nomePai);
		$stmt->bindParam(':numRG', $this->numRG);
		$stmt->bindParam(':numCPF', $this->numCPF);
		$stmt->bindParam(':dataNasc', $this->dataNasc);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':modalidade', $this->modalidade);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, nomeMae = :nomeMae, nomePai = :nomePai, numRG = :numRG, numCPF = :numCPF, dataNasc = :dataNasc, sexo = :sexo, modalidade = :modalidade WHERE id = :id";
		$stmt = $this->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':nomeMae', $this->nomeMae);
		$stmt->bindParam(':nomePai', $this->nomePai);
		$stmt->bindParam(':numRG', $this->numRG);
		$stmt->bindParam(':numCPF', $this->numCPF);
		$stmt->bindParam(':dataNasc', $this->dataNasc);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':modalidade', $this->modalidade);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;

    }

    public function getNomePai()
    {
        return $this->nomePai;
    }

    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;
    }

    public function getNumRG()
    {
        return $this->numRG;
    }

    public function setNumRG($numRG)
    {
        $this->numRG = $numRG;
    }

    public function getNumCPF()
    {
        return $this->numCPF;
    }

    public function setNumCPF($numCPF)
    {
        $this->numCPF = $numCPF;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getModalidade()
    {
        return $this->modalidade;
    }

    public function setModalidade($modalidade)
    {
        $this->modalidade = $modalidade;
    }
}