<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>List Karyawan</title>
</head>
<body>
    <div id="content-wrapper">
        <div class="container-fluid" style="padding:20px 15px 20px;">
            <a type="button" class="btn btn-primary" href="<?php echo site_url('karyawan/add') ?>">Add New</a>
        </div>
        <div class="container-fluid">
            <table class="table table-bordered table-striped text-center table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $flag = 1 ?> 
                    <?php foreach ($karyawan as $karyawa): ?>
                        <tr>
                        <th scope="row"><?php echo $flag?></th>
                        <td><?php echo $karyawa->nama_kar ?></td>
                        <td><?php echo $karyawa->alamat_kar ?></td>
                        <td><?php echo $karyawa->email_kar ?></td>
                        <td><?php echo $karyawa->no_telp_kar ?></td>
                        
                        <td width="250">
                            <a type="button" class="btn btn-success" href="<?php echo site_url('karyawan/edit/'.$karyawa->id_kar) ?>"> Edit </a>
                            <a type="button" class="btn btn-danger" href="<?php echo site_url('karyawan/delete/'.$karyawa->id_kar) ?>"> Hapus </a>
                        </td>
                        <?php $flag += 1 ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>