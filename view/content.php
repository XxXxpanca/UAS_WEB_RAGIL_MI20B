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

<body>
    <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center">Data Billing</div>
                            <div class="float-end">
                                <a href="add.php" class="badge bg-info py-2 px-2 small text-white fw-bold text-decoration-none"><i class="bi bi-plus"></i>Add Billing</a>
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
                                                <!-- <td>Rp. <?= $val['harga'] ?></td> -->
                                                <td>Rp. <?= $val['harga']*$val['jumlah_beli'] ?></td>
                                                <td>
                                                    <a href="edit.php?id_billing=<?= $val['Id_billing'] ?>" class="badge bg-warning text-dark p-2 text-decoration-none"><i class="bi bi-pen"></i> Edit</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $val['Id_billing'] ?>" class="badge bg-danger p-2 text-white text-decoration-none"><i class="bi bi-trash"></i> Delete</a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal<?= $val['Id_billing'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Delete Data Billing</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h6>Apakah anda yakin ingin menghapus ID billing <?= $val['Id_billing'] ?>
                                                                        <strong><span class="grt"></span></strong> ?
                                                                        </h4>
                                                                </div>
                                                                <form action="<?= $ctrl->hapusData()?>" method="POST">
                                                                <div class="modal-footer">
                                                                    <button type="button" name="delete" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <a href="delete_proses.php?id_billing=<?= $val['Id_billing'] ?>" class="btn btn-danger">Delete</a>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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