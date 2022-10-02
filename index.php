<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/bootstrap.min.css">
    <script src="../dist/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-3">
                    <div class="card-body">
                        <h1 class="display-2 text-center">Form Data</h1>
                        <hr class="border border-secondary">
                        <form action="save.php" method='post' class="p-5">
                            <div class="mb-3 form-floating">
                                <input type="text" id="nim" name="nim" class="form-control" placeholder='.'>
                                <label for='nim'>Masukkan NIM</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder='.'>
                                <label for='nama'>Masukkan Nama</label>
                            </div>
                            Masukkan Gender :
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="laki" name="gender" value="Laki-laki">
                                <label for='laki' class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="wanita" name="gender" value="Wanita">
                                <label for='wanita' class="form-check-label">Wanita</label>
                            </div>
                            <label for='status'>Masukkan Status :</label>
                            <select name="status" id="status" class="form-select mb-3">
                                <option disabled selected>-Pilih-</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                            </select>

                            <div class="mb-3 form-floating">
                                <input type="text" id="telp" name="telp" class="form-control" placeholder='.'>
                                <label for='telp'>Masukkan No Hp</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <textarea id="alamat" name="alamat" class="form-control" placeholder='.' rows="3"></textarea>
                                <label for='alamat'>Masukkan Alamat</label>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>