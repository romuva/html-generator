<?php 
    require_once dirname(__FILE__).'../../config/Database.php';
    require_once dirname(__FILE__).'../../config/Utilities.php';
    // header('Content-Type: application/json');
    // if(isset($_SESSION['username'])){

        $products = array();

            //check if user exists in the db 
            $sqlQuery = "SELECT id FROM products ORDER BY id DESC LIMIT 1";
            $statement = $db->prepare($sqlQuery);
            $statement->execute();

            while($row = $statement->fetch()){
                $products[$i]['id'] = $row['id'];
                echo $row['id'];
            }

    // }
?>