<?php  
	$host = 'bjqb8wn0h3bixmwd1gw7-mysql.services.clever-cloud.com';
	$pwd = 'NwSPfaslKDZ0xp2x9tOC';
	$user = 'uivehdn66sxhsaxq';
	$dbName= 'bjqb8wn0h3bixmwd1gw7';

	try {
		$bd = new PDO(
			'mysql:host=' . $host . ';
			dbname='.$dbName,
			$user,
			$pwd,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>