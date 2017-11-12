<?php

require_once 'config.php';

class DB{

	private static $instance;



	public static function getInstance(){

		if(!isset(self::$instance)){

			try {
				$dbopts = parse_url(getenv('postgres://wolqehbjdhqouv:6f8c7b8b99faa31823c88f37df3b6bc315f2320ee9cf75a033740c4c859f5322@ec2-107-22-167-179.compute-1.amazonaws.com:5432/dbqc4gqll2o9ps'));
				$app->register(new Herrera\Pdo\PdoServiceProvider(),
				               array(
				                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["ec2-107-22-167-179.compute-1.amazonaws.com"] . ';port=' . $dbopts["5432"],
				                   'pdo.username' => $dbopts["wolqehbjdhqouv"],
				                   'pdo.password' => $dbopts["6f8c7b8b99faa31823c88f37df3b6bc315f2320ee9cf75a033740c4c859f5322"]
				               )
				);
				$instance = $dbopts;

				//self::$instance = new PDO('pgsql:host=ec2-107-22-167-179.compute-1.amazonaws.com;port=5432;dbname=dbqc4gqll2o9ps;user=wolqehbjdhqouv;password=6f8c7b8b99faa31823c88f37df3b6bc315f2320ee9cf75a033740c4c859f5322');
				//self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				//self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}

		}

		return self::$instance;
	}
 	
	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}

}