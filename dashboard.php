<?php
//? koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//?get data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Daftar Mahsiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="https://picsum.photos/seed/picsum/200/300" style="width: 50px;" />
                </td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['jurusan'] ?></td>
            </tr>
        <?php endwhile ?>
    </table>

</body>

</html>