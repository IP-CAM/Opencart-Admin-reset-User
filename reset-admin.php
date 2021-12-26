<?php
	
	require_once('config.php');
	
	if (file_exists(DIR_SYSTEM . 'library/db/' . DB_DRIVER . '.php')){
		require DIR_SYSTEM . 'library/db/' . DB_DRIVER . '.php';
	} else {
		require DIR_SYSTEM . 'database/' . DB_DRIVER . '.php';
	}
	
	require DIR_SYSTEM . 'library/db.php';
	
	$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	$sql = "UPDATE `".DB_PREFIX."user` SET password = md5('mudar123') WHERE username = 'admin'";
	$result = $db->query($sql);
	
	//var_dump($result);
	
die('FEITO!');