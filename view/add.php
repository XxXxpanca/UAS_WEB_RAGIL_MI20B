<?php
include '../controller/Warnet_Controller.php';
$ctrl = new WarnetController();
// $dataWarnet = $ctrl->getJenisData();
// $id = $_GET['id_billing'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center">Tambah Data Billing</div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $ctrl->simpanData();?>" method="post" name="form1">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <small>ID Billing</small>
                                            <input type="text" name="id_billing" id="id_billing" class="form-control" placeholder="SWR-001-2021">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <small>Nama Penyewa</small>
                                            <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <small>Lokasi PC</small>
                                            <input type="text" name="lokasi_pc" id="lokasi_pc" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <small>Tanggal Billing</small>
                                            <input type="date" name="tgl_billing" id="tgl_billing" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>Operator</small>
                                            <input type="text" name="nama_operator" id="nama_operator" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5 mt-3">
                                        <div class="form-group">
                                            <small>Jenis Paket..</small>
                                            <select name="jenis_paket" id="jenis_paket" class="form-control">
                                                <option value="">Silahkan Pilih Paket...</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <!-- button tambah jenis paket -->
                                    <div class="col-lg-1">
                                        <div class="form-group pt-4">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#add-paket" data class="badge bg-info py-3 px-3 mt-2 text-decoration-none"><i class="bi bi-plus"></i>Tambah</a>      
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>Jumlah Beli..</small>
                                            <input type="text" name="jumlah_beli" id="jumlah_beli" class="form-control">
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-12 mt-4">
                                        <button type="submit" name="simpan" class="btn btn-info text-white"><i class="bi bi-save"></i> Add</button>
                                        <a href="content.php" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="add-paket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="add_jenis_paket" >
        <div class="modal-body">
            <div class="form-group">
                <small>Paket..</small>
                <input type="text" name="paket_input" id="paket_input" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="add-paket" class="btn btn-primary">add</button>
        </div>
        </form>
        
        </div>
    </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
<script type="text/javascript">
    $(document).ready(function(){
        // alert('test');
        show_jenis();
        add_option();   //memanggil function yang ada dibawah
        //
        function show_jenis(){ //untuk menampilkan data product

            $.ajax({
                type : 'GET',
                url : 'api.php', //memanggil Controller/Function
                async : false,
                dataType : 'json',
                success : function(data){
                    let html = '';
                    $('#jenis_paket').empty();
                    $.each(data, function(i, row) {
                        html = '<option value="' + row.nama_paket + '">' + row.nama_paket + '</option';
                        $('#jenis_paket').append(html);
                    });  
                 }, 
                error:function(data){
                    console.log(data);
                }
            });
        }


        function add_option() {
            $('#add_jenis_paket').on('submit', function(e) {
                e.preventDefault();
                let nama_paket = $('#paket_input').val();
                console.log(nama_paket);

                $.ajax({
                    url: 'api.php',
                    type: 'POST',
                    data: {
                        nama_paket: nama_paket,
                    },
                    
                    dataType: 'json',
                    success: function(data) {
                        show_jenis();
                        alert('Success added data');
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        }
    });
   
</script>
</html>