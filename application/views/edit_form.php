<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-4" style="padding: 40px 40px 50px 50px;">

    <form action="" method="post" enctype="multipart/form-data">
    <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
        oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

        <input type="hidden" name="id_kar" value="<?php echo $karyawa->id_kar?>" />

        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control <?php echo form_error('nama_kar') ? 'is-invalid':'' ?>"
            type="text" name="nama_kar" placeholder="Nama Karyawan" value="<?php echo $karyawa->nama_kar ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('nama_kar') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat_kar">Alamat</label>
            <input class="form-control <?php echo form_error('alamat_kar') ? 'is-invalid':'' ?>"
            type="text" name="alamat_kar" min="0" placeholder="Alamat Karyawan" value="<?php echo $karyawa->alamat_kar ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('alamat_kar') ?>
            </div>
        </div>


        <div class="form-group">
            <label for="email_kar">Email</label>
            <input class="form-control <?php echo form_error('email_kar') ? 'is-invalid':'' ?>"
            type="text" name="email_kar" placeholder="Email Karyawan" value="<?php echo $karyawa->email_kar ?>"/>
            <div class="invalid-feedback">
                <?php echo form_error('email_kar') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="no_telp_kar">No Telp</label>
            <input class="form-control <?php echo form_error('no_telp_kar') ? 'is-invalid':'' ?>"
            name="no_telp_kar" placeholder="No Telp Karyawan" value="<?php echo $karyawa->no_telp_kar ?>"/>
            <div class="invalid-feedback">
                <?php echo form_error('no_telp_kar') ?>
            </div>
        </div>

        <input class="btn btn-success col-md-4" type="submit" name="btn" value="Save" />
        <a type="button" class="btn btn-primary col-md-4" href="<?php echo site_url('karyawan/index') ?>">Back</a>
    </form>

    </div>
</body>
</html>