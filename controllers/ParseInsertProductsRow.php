<?php 
    require_once dirname(__FILE__).'../../config/Database.php';
    require_once dirname(__FILE__).'../../config/Utilities.php';
    // header('Content-Type: application/json');

    $active = $_REQUEST['active'];
	$title = $_REQUEST['title'];
	$price = $_REQUEST['price'];
	$price_discount = $_REQUEST['price_discount'];
	$description_short = $_REQUEST['description_short'];
	$description_long = $_REQUEST['description_long'];
	$logo_url = $_REQUEST['logo_url'];

	//delete product row from the db 
	$sqlQuery = "INSERT INTO products (
	active, title, price, price_discount, description_short, description_long, logo_url, created) 
	VALUES (
	:active,:title,:price,:price_discount,:description_short,:description_long,:logo_url,NOW())";
	$statement = $db->prepare($sqlQuery);
	if($statement->execute(array(':active'=> $active,':title'=> $title,':price'=> $price,':price_discount'=> $price_discount,':description_short'=> $description_short,':description_long'=> $description_long,':logo_url'=> $logo_url))){
		echo true;
	} else {
		echo false;
	}
?>