<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-8">
                <a class="btn btn-xs btn-flat btn-primary" href="<?= site_url('mahasiswa/tambah_mahasiswa') ?>"> Tambah</a>
                <hr>
                
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $no = 1; foreach($mhs as $key => $v) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $v->nama_mhs ?></td>
                                <td><?= $v->jenis_kelamin ?></td>
                                <td><?= $v->jurusan ?></td>
                                <td><?= $v->email ?></td>
                                <td>
                                    <a href="<?= site_url('mahasiswa/hapus_mahasiswa/'.$v->id) ?>" class="btn btn-danger btn-xs btn-flat">Hapus Data</a>
                                </td>
                            </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>