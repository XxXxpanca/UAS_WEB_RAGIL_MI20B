<?php
    include '../controller/Warnet_Controller.php';

    $ctrl = new WarnetController();
    $hasil = $ctrl->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body onload="window.print()">
                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center">Data Billing</div>
                            <div class="float-end">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped w-100 text-center">
                                    <thead>
                                        <tr>
                                            <th>ID Billing</th>
                                            <th>Nama</th>
                                            <th>Nomor PC</th>
                                            <th>Tanggal Billing</th>
                                            <th>Jenis Paket</th>
                                            <th>Operator</th>
                                            <th>Jumlah Beli</th>
                                            <!-- <th>Harga</th> -->
                                            <th>Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($hasil as $val) { ?>
                                            <tr>
                                                <td><?= $val['Id_billing'] ?></td>
                                                <td><?= $val['nama_penyewa'] ?></td>
                                                <td><?= $val['lokasi_pc'] ?></td>
                                                <td><?= $val['tgl_billing'] ?></td>
                                                <td><?= $val['jenis_paket'] ?> Jam</td>
                                                <td><?= $val['nama_operator'] ?></td>
                                                <td><?= $val['jumlah_beli'] ?></td>
                                                <!-- <td>Rp. <?= $val['harga'] ?></td>  -->
                                                <td>Rp. <?= $val['harga']*$val['jumlah_beli'] ?></td>
                                                <td>
                                                
                                                </td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>