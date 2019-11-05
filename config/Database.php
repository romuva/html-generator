<?php 

    define("DSN", "mysql:host=localhost;dbname=unabas_htmlgenerator;charset=utf8mb4");
    define("USERNAME", "htmlgenerator");
    define("PWD", "svhqR3WJmS2U37nr");
    mb_internal_encoding('UTF-8');
    mb_http_output('UTF-8');

	

	try {
            
            //Create the connection 
            $db = new PDO(DSN, USERNAME, PWD);
            
            //set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	catch (PDOException $ex) {
            //Display error message
            echo "Connection failed ".$ex->getMessage();
        }




	