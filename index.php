<!DOCTYPE html>
<html>

<head>
  <title>CRUD Mahasiswa</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>

  <div class="container">

    <h1>Daftar Mahasiswa</h1>

    <?php
    // Include the connection file
    include 'koneksi.php';

    // Write a query to fetch all students from the 'mahasiswa' table
    $sql = "SELECT * FROM mahasiswa";
    $result = mysqli_query($link, $sql);

    // Check if any results are found
    if (mysqli_num_rows($result) > 0) {
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

          <?php
          // Loop through each student record and display details
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row['nim']; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row["no_hp"]; ?></td>
              <td><?php echo $row['jenis_kelamin']; ?></td>
              <td><?php echo $row['jurusan']; ?></td>
              <td><?php echo $row['alamat']; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>

    <?php
    } else {
      // If no students found, display a message
      echo "Tidak ada mahasiswa ditemukan.";
    }
    ?>

    <a href="create.php" class="btn btn-success mt-3">Tambah Mahasiswa</a>

  </div>

</body>

</html>
