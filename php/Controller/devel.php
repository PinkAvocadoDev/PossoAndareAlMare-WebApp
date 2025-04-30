<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');
header('Access-Control-Max-Age: 86400');
header("Content-Type:application/json");

include('../inc/conf.php');

RESTponse();

function RESTponse()
{
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'POST':
            
                include('../inc/dev.php');
                //ALLOW FOR VOTING PROCESS
                if(isset($_POST["dev"]) && $_POST['dev'] == $APIDEVKEY){
                    include("../inc/db.php");
                    $result = mysqli_query($con, "SELECT * FROM FEEDBACK ORDER BY DOF");
                    $array_set = array();
                    while($set = mysqli_fetch_assoc($result)){
                        array_push($array_set, $set);
                    }
                    $con->close();
                    http_response_code(200);
                    echo json_encode($array_set);
                }else{
                    http_response_code(404);
                }
            
            break;
        default:
            http_response_code(405);
            break;
    }
}