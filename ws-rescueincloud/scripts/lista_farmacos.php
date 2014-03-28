<?php

/*
	Request a new game
	======= = === ====
	200		New game added, waiting for player to accept the request...
	201		There is already a game in progress.
	codigos por definir...	
*/

$email = $_POST['email'];

require_once 'db_functions.php';
$db = new DB_Functions();

	try{
		$result[]=$db->lista_farmacos($email);
		$db->close();
	}
	catch(Exception $e){
		$result[]=array("code"=>"-1", "message"=>"Unknown problem.");
	}
	
	echo json_encode($result);

?>



