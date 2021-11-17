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

    function getDataWarnet($id)
    {
        $row = $this->db->prepare("SELECT * FROM tbl_data_warnet where Id_billing = '$id' ");
        $row ->execute();
        return $hasil = $row->fetch();
    }

    function getJenisData()
    {
        $row = $this->db->prepare("SELECT * FROM tbl_data_warnet");
        $row ->execute();
        return $hasil = $row->fetch();
    }

    function simpanData($data)
    {
        $rowSQL = array();
        $toBind = array();
        $columnNames = array_keys($data[0]);

        foreach($data as $arrayIndex => $row)
        {
            $params = array();
            foreach($row as $columnName => $columnValue){
                $param = ":" . $columnName . $arrayIndex;
                $params[] = $param;
                $toBind[$param] = $columnValue;
            }
            $rowSQL[] = "(" . implode(", ", $params) . ")";
        }
        $sql = "INSERT INTO tbl_data_warnet (" . implode(", ", $columnNames) . ") VALUES " . implode
        (", ", $rowSQL);
        $row = $this->db->prepare($sql);

        foreach($toBind as $param => $val)
        {
            $row ->bindValue($param, $val);
        }
    }

    function updateData($data,$id)
    {
        $setPart = array();
        foreach($data as $key => $value)
        {
            $setPart[] = $key. "=:" .$key;
        }

        $sql = "UPDATE tbl_data_warnet SET ". implode(',', $setPart). "WHERE id = :id";

        $row = $this->db->prepare($sql);

        $row ->bindValue(':id',$id);
        foreach($data as $param => $val)
        {
            $row ->bindValue($param, $val);
        }
        return $row ->execute();
    }

    function hapusData($id)
    {
        $sql = "DELETE * FROM tbl_data_warnet where id=?";
        $row =$this->db->prepare($sql);
        return $row ->execute(array($id));
    }

}
?>