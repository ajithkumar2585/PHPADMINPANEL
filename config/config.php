<?php

try {
// Host
define("HOST" ,"localhost");

//DBNAME
define("DBNAME" ,"DB_FORUM");

//USER
define("USER", "root");

//PASSWORD
define("PASS", "123");

$conn = new PDO("mysql:host=".HOST." ; dbname=".DBNAME."",USER,PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($conn == true){
    echo "database connection successful";
}else {
    echo "error";
}

}catch(PDOException $Exception ) {
    echo $Exception->getMessage();
}




?>