<?php

    include '../Database.php';
    include '../model/Warnet_model.php';

    class WarnetController{
        public $model;

        function __construct()
        {
            $db = new Database();
            $conn = $db->DBConnect();
            $this->model = new warnet_model($conn); 
        }
           function index (){
            $hasil = $this->model->tampil_data();

            return $hasil;
        }
    }
?>