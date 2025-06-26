<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nim = $_GET['nim'];
$query = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE nim='$nim'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Mahasiswa</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="nim" value="<?= $row['nim'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>NIM</td>
                  <td><input class="form-control" type="number" name="nim" size="20" required value="<?= $row['nim'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input class="form-control" type="text" name="nama" size="20" required value="<?= $row['nama'] ?>"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td><input class="form-control" type="text" name="jenis_kelamin" size="20" required value="<?= $row['jenis_kelamin'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Kota Kelahiran</td>
                  <td><input class="form-control" type="text" name="kota_kelahiran" size="20" required value="<?= $row['kota_kelahiran'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td><input class="form-control" type="text" name="tanggal_kelahiran" size="20" required value="<?= $row['tanggal_kelahiran'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><input class="form-control" type="text" name="alamat" size="20" required value="<?= $row['alamat'] ?>"></td>
                </tr>
                <tr>
                  <td>Program Studi</td>
                  <td><input class="form-control" type="text" name="program_studi" size="20" required value="<?= $row['program_studi'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Tahun Masuk</td>
                  <td><input class="form-control" type="text" name="tahun_masuk" size="20" required value="<?= $row['jenis_kelamin'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>