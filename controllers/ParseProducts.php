<?php 
    require_once dirname(__FILE__).'../../config/Database.php';
    require_once dirname(__FILE__).'../../config/Utilities.php';
    // header('Content-Type: application/json');
    // if(isset($_SESSION['username'])){

        $products = array();

            //check if user exists in the db 
            $sqlQuery = "SELECT * FROM products";
            $statement = $db->prepare($sqlQuery);
            $statement->execute();

            $i = 0;
            while($row = $statement->fetch()){
                $products[$i]['id'] = $row['id'];
                $products[$i]['active'] = $row['active'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['price_discount'] = $row['price_discount'];
                $products[$i]['description_short'] = $row['description_short'];
                $products[$i]['description_long'] = $row['description_long'];
                $products[$i]['logo_url'] = $row['logo_url'];
                $products[$i]['created'] = $row['created'];
                $i++;
            }
            echo json_encode($products, JSON_PRETTY_PRINT);

    // }
?>