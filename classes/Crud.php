<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;

	abstract public function insert();
	abstract public function update($id);

	public function find($id){
		$sql  = "SELECT * FROM $this->table WHERE id = :id;";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll(){
		$dbopts = parse_url(getenv('postgres://zwjaegfjfxxizf:5049949664477c785135e52fbb54265edc71a7a3c2c67cfdcc878f16f7763741@ec2-184-73-174-10.compute-1.amazonaws.com:5432/d9vdiign21bcuv'));
		$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
	);
		$app->get('/db/', function() use($app) {
  		$st = $app['pdo']->prepare('SELECT * FROM usuarios');
  		$st->execute();

		
	}

	public function delete($id){
		$sql  = "DELETE FROM $this->table WHERE id = :id;";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}