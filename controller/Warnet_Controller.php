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
            session_start();
            if(!empty($_SESSION)){
             $hasil = $this->model->tampil_data();
             return $hasil;
          }else{
            header("Location:login.php");
          }
        }

        function getData($id)
        {
            $hasil = $this->model->getDataWarnet($id);
            return $hasil;
        }

        function getJenisData()
        {
            $hasil = $this->model->getJenisData();
            echo json_encode($hasil);
        }


        function hapusData()
        {
            if(isset($_POST['delete'])) {
                $id = $_POST['Id_billing'];

                $result = $this->model->hapusData($id);

                if($result){
                //     header("Location:content.php?pesan=success&frm=del");
                // }else{
                //     header("Location:content.php?pesan=gagal&frm=del");
                }
            }
        }

        function set_jenis_data() {
            $nama_paket = $_POST['nama_paket'];
            $data[] = array(
                    'nama_paket'  =>$nama_paket,
                    'harga'       =>$nama_paket * 3000,
            );

            $this->model->set_jenis_data($data);
            $respown['status_code'] = 1;
            $respown['status'] = 'Success';
            echo json_encode($respown);
        }

        function simpanData()
        {
            if(isset($_POST['simpan']))
            {
                $id_billing = $_POST['id_billing'];
                $nama_penyewa = $_POST['nama_penyewa'];
                $lokasi_pc = $_POST['lokasi_pc'];
                $tgl_billing = $_POST['tgl_billing'];
                $nama_operator = $_POST['nama_operator'];
                $jenis_paket = $_POST['jenis_paket'];
                $jumlah_beli = $_POST['jumlah_beli'];

                $data[] = array(
                        'Id_billing'       =>$id_billing,
                        'nama_penyewa'     =>$nama_penyewa,
                        'lokasi_pc'        =>$lokasi_pc,
                        'tgl_billing'      =>$tgl_billing,
                        'nama_operator'    =>$nama_operator,
                        'jenis_paket'      =>$jenis_paket,
                        'jumlah_beli'      =>$jumlah_beli
                );

            $result = $this->model->simpanData($data);

                if($result)
                {
                    header("Location:content.php?pesan=success&frm=add");
                }else{
                    header("Location:content.php?pesan=gagal&frm=add");
                }
            }
        }
        
        // function add_paket(){
        //     $jenis_paket = $_POST['JenisPaket'];
        //     $data[] = array(
        //         'Jenis_Paket'  =>$jenis_paket,
        //     );

        //     $result = $this->model->simpanJenisData($data);
        //         if($result){
        //             echo '200';
        //         }else{
        //             echo '300';
        //         }
        // }



        function upadateData($id)
        {
            if(isset($_POST['update']))
            {
                $id_billing = $_POST['id_billing'];
                $nama_penyewa = $_POST['nama_penyewa'];
                $lokasi_pc = $_POST['lokasi_pc'];
                $tgl_billing = $_POST['tgl_billing'];
                $nama_operator = $_POST['nama_operator'];
                $jenis_paket = $_POST['jenis_paket'];
                $jumlah_beli = $_POST['jumlah_beli'];


                $data = array(
                        'nama_penyewa'     =>$nama_penyewa,
                        'lokasi_pc'        =>$lokasi_pc,
                        'tgl_billing'      =>$tgl_billing,
                        'nama_operator'    =>$nama_operator,
                        'jenis_paket'      =>$jenis_paket,
                        'jumlah_beli'      =>$jumlah_beli
                );

            $result = $this->model->updateData($data,$id);
                if($result)
                {
                    header("Location:content.php?pesan=success&frm=edit");
                }else{
                    header("Location:content.php?pesan=gagal&frm=edit");
                }
            }
        }

        function Logout(){
         if(isset($_POST['logout'])){
            session_start();
            session_destroy();
            header('location:login.php?signout=yes');
        }
    }
}

?>