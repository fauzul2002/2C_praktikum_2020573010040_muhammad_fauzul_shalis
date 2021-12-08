<?php
require "koneksi.php";
$kd_brg = $_POST['kd_brg'];

$delate = mysqli_query($conn,"DELATE tb_barang SET nama_barang='$nm_brg', keterangan='$ket', stok='$stok' WHERE kode_barang='$kd_brg'");

if ($delate){
    echo "<script>window.location='../databrg';</script>";
}else{
    echo "<script>alert('Mohon maaf data gagal di dihapus');
        window.location='../databrg';</script>";
}
