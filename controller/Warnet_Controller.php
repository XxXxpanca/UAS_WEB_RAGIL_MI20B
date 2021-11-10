<?php

    include '../Database.php';
    include '../model/Warnet_model.php';

    // class WarnetController{
    //     private $model;

    //     function __construct()
    //     {
            $db = new Database();
            $conn = $db->DBConnect();
            $model = new warnet_model($conn);
        // }

        // function index(){
            $hasil = $model->tampil_data();
    //     }
    // }
?>