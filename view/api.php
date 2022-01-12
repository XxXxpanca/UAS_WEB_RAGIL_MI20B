<?php
    header("Access-Control-Allow-Origin:*");
    header("Content-Type:application/json;charset=UTF-8");
    header("Access-Control-Allow-Methods:POST,GET,PUT,DELETE");
    header("Access-Control-Max-Age:3600");
    header("Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Requested-With");
    
    // Get Databse Connection
    include '../controller/Warnet_Controller.php';
    $ctrl = new WarnetController();
    $request = $_SERVER['REQUEST_METHOD'];
    switch($request)
    {
        case 'GET' :
            $ctrl->getJenisData();

            break;
            case 'POST' :
            $ctrl->set_jenis_data();
            break;



            case 'PUT' :
            break;
            case 'DELETE' :
            break;
            default :
            http_response_code(404);
            echo "Request Tidak Diizinkan";
    }

?>