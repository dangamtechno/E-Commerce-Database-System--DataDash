<?php
require '../include/database_config.php';
if($_SERVER['REQUEST_METHOD']=="GET"){
   $stmt = "SELECT * FROM product  WHERE status = 1 order by Date_added desc limit 3;";
    if($result = $conn->query($stmt)){
        $arr = array();
        while($rowArray = $result->fetch_assoc()){
            array_push($arr,$rowArray);
        }
        echo json_encode(['new_items'=> $arr]);
    }
    else{
       echo json_encode(['error'=> 'something went wrong']);
    }
   exit();
}