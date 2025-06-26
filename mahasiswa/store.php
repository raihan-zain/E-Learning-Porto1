<?php
session_start();
require_once '../helper/connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kota_kelahiran = $_POST['kota_kelahiran'];
$tanggal_kelahiran = $_POST['tanggal_kelahiran'];
$alamat = $_POST['alamat'];
$program_studi = $_POST['program_studi'];
$tahun_masuk = $_POST['tahun_masuk'];

$query = mysqli_query($connection, "insert into mahasiswa(nim, nama, jenis_kelamin, kota_kelahiran, tanggal_kelahiran, alamat, program_studi, tahun_masuk) value('$nim', '$nama', '$jenis_kelamin', '$kota_kelahiran', '$tanggal_kelahiran', '$alamat', '$program_studi', '$tahun_masuk')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }
