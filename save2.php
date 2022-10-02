
$_SESSION[] = ['nim'=>$nim, 'nama'=>$nama, 'gender'=>$gender, 'status'=>$status, 'telp'=>$telp, 'alamat'=>$alamat];
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Status</th>
                <th>No. Hp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
    <?php
    foreach($_SESSION as $x => $value)
    {
    ?>
        <tr>
            <td><?= $x[$value]['nim'];?></td>
            <td><?= $x[$value]['nama'];?></td>
            <td><?= $x[$value]['gender'];?></td>
            <td><?= $x[$value]['status'];?></td>
            <td><?= $x[$value]['telp'];?></td>
            <td><?= $x[$value]['alamat'];?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</body>
</html>

