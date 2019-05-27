<?php
	class Database
	{
		// Atributos
		// private $dbHost = "eu-cdbr-west-02.cleardb.net";
		private $dbHost = "Localhost";
		// private $dbUser = "bffe6319859464";
		private $dbUser = "root";
		// private $dbPass = "dbb3040b";
		private $dbPass = "";
		// private $dbName = "heroku_54bd8ecf8967fd9";
		private $dbName = "mismatronas";

		//
		private static $prp = null	  	 ;
		private static $pdo = null 		 ;

		//
		private static $instancia = null ;

		// Constructor
		public function __construct()
		{
			$this->connect() ;
		}

		//
		private function __clone() {}

		//
		// Obtener Instancia
	    public static function getInstance()
	    {
	    	if (is_null(self::$instancia)) {
	    		self::$instancia = new Database() ;
	    	}
	    	return self::$instancia ;
	    }

	    //
	    // Conectar a BBDD
		public function connect()
		{
			try {
				self::$pdo = new PDO("mysql:host={$this->dbHost};dbname={$this->dbName};charset=utf8;",
				$this->dbUser,
				$this->dbPass) ;
			} catch (Exception $e) {
				die ("Error en conectar la BBDD; ".$e) ;
			}
		}

		//
		// Realizar consulta a la BBDD
		public function query($sql, $params = [])
		{
			self::$prp = self::$pdo->prepare($sql) ;

			$flg = self::$prp->execute($params) ;

			if ( ($flg) && (self::$prp->rowCount() > 0) ) {
				return true  ;
			} else {
				return false ;
			}
		}

		//
		// Obtener nueva entrada de la BBDD de la clase dada (Por defecto será la StdClass si no se especifica otra)
		public function getRow($class="StdClass")
		{
			if (self::$prp) {
				return self::$prp->fetchObject($class) ;
			}
		}

		//
		// Obtener el ID de la última entrada de la BBDD
		public function getLastid()
		{
			return self::$pdo->lastInsertid() ;
		}

	}
?>	