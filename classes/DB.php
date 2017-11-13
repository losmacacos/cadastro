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

		return $app;
	}
 	
	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}

}