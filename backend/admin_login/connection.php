<?php
 
$conn = "";
  
try {
    $servername = "localhost";
    $dbname = "toybank";
    $username = "toybank";
    $password = "toybank";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=toybank",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>