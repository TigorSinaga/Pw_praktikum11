<!DOCTYPE html>
<html>

<head>
  <title>CRUD Mahasiswa</title>

</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<body>
  <div class="container">

    <h1 class="mt-4 mb-4">CRUD Mahasiswa</h1>
    <?php include 'koneksi.php';

    $sql = "SELECT * FROM mahasiswa";
    $result = mysqli_query($link, $sql);

    ?>
    <table class="table">

      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>No HP</th>
          <th>Jenis Kelamin</th>
          <th>Jurusan</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>

          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row["no_hp"]; ?></td>
          <td><?php echo $row['jenis_kelamin']; ?></td>
          <td><?php echo $row['jurusan']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td>
            <a href="form_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="form_tambah.php" class="btn btn-success">Tambah Mahasiswa</a>
  </div>
</body>

</html>
