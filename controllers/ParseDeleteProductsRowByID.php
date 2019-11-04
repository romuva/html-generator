<?php 
    require_once dirname(__FILE__).'../../config/Database.php';
    require_once dirname(__FILE__).'../../config/Utilities.php';
    // header('Content-Type: application/json');

	$id = $_REQUEST['id'];

	//delete product row from the db 
	$sqlQuery = "DELETE FROM products WHERE id = :id";
	$statement = $db->prepare($sqlQuery);
	if($statement->execute(array(':id'=> $id))) {
		echo true;
	} else {
		echo false;
	}

?>