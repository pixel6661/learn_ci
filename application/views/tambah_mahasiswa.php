<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="post" action="<?= site_url('mahasiswa/tambah_mahasiswa') ?>">
                    <div class="form-group">
                        <label >Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mhs" placeholder="Inputkan Nama Kamu">
                    </div>
                    <div class="form-group">
                        <label >Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin">
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="text" class="form-control" name="email_mhs">
                    </div>
                    <div class="form-group">
                        <label >Jurusan</label>
                        <input type="text" class="form-control" name="jurusan_mhs" >
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>