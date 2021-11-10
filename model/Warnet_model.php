<?php

class warnet_model {

    protected $db;
    function __construct($db){
        $this->db = $db;
    }

    function tampil_data()
    {
        $row = $this->db->prepare("SELECT * FROM tbl_data_warnet INNER JOIN tbl_paket on tbl_paket.Id_paket=tbl_data_warnet.jenis_paket");
        $row->execute();
        return $hasil = $row->fetchAll();
    }
}
?>