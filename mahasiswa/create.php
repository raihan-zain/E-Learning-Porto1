<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Data Mahasiswa</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>NIM</td>
                <td><input class="form-control" type="text" name="nim" size="20" required></td>
              </tr>

              <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" size="20" required></td>
              </tr>
              
              <tr>
                <td>Jenis Kelamin</td>
                <td><input class="form-control" type="text" name="jenis_kelamin" size="20" required></td>
              </tr>

              <tr>
                <td>Kota Kelahiran</td>
                <td><input class="form-control" type="text" name="kota_kelahiran" size="20" required></td>
              </tr>

              <tr>
                <td>Tanggal Lahir</td>
                <td><input class="form-control" type="text" name="tanggal_kelahiran" size="20" required></td>
              </tr>
              
              <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat" size="20" required></td>
              </tr>
            
              <tr>
                <td>Program Studi</td>
                <td><input class="form-control" type="text" name="program_studi" size="20" required></td>
              </tr>
              
              <tr>
                <td>Tahun Masuk</td>
                <td><input class="form-control" type="text" name="tahun_masuk" size="20" required></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>