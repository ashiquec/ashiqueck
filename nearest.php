<?php
require_once("connection.php");
$response = array("error" => FALSE);
 
$stmt=$conn->query("SELECT * FROM nearest_driver  ");
$detailsres=$stmt->fetchAll(); 
$use=array();
$response["drv_id"]=array();


foreach($detailsres as $res){

$use['name']=$res['drv_name'];
$use['distance']=$res['drv_distance'];
$use['rating']=$res['drv_rating'];
array_push($response["drv_id"],$use);
}
     if (!$detailsres) {
        $response["error"] = TRUE;
        $response["msg"] = "error occur";
        echo json_encode($response);
    } else {
        print json_encode($response);
           
    }


?> 