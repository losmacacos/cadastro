<?php

require_once 'config.php';

class DB{

	private static $instance;



	public static function getInstance(){

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
		// if(!isset(self::$instance)){

			// try {
				
				//self::$instance = new PDO('pgsql:host=ec2-107-22-167-179.compute-1.amazonaws.com;port=5432;dbname=dbqc4gqll2o9ps;user=wolqehbjdhqouv;password=6f8c7b8b99faa31823c88f37df3b6bc315f2320ee9cf75a033740c4c859f5322');
				//self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				//self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		// 	} catch (PDOException $e) {
		// 		echo $e->getMessage();
		// 	}

		// }

		return $app;
	}
 	
	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}

}