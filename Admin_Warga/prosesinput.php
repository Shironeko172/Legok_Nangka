<?php
require "koneksi.php";
if (isset($_POST['oke'])) {
    $nk = $_POST['nk'];
    $na = $_POST['na'];
    $ni = $_POST['ni'];
    $jk = $_POST['jk'];
    $te = $_POST['te'];
    $ta = $_POST['ta'];
    $ag = $_POST['ag'];
    $pe = $_POST['pe'];
    $jp = $_POST['jp'];
    $st = $_POST['st'];
    $sd = $_POST['sd'];
    $kw = $_POST['kw'];

    $data = "insert into data_kk (nkk,nama,nik,jeniskelamin,tempatlahir,tl,agama,pendidikan,jenispekerjaan,status,statusdikeluarga,kewarganegaraan) values ('$nk','$na','$ni','$jk','$te','$ta','$ag','$pe','$jp','$st','$sd','$kw')";
    if ($koneksi->query($data) === TRUE) {
        echo "<script>alert('Data Berhasil Di Simpan')</script>";
        echo "<script>window.location.replace('tables.php');</script>";
    } else {
        echo "<script>alert('apalah')</script>";
    }
}

if (isset($_POST['umumkan'])){
    $no = $_POST['no'];
    $pe = $_POST['pe'];
    $ym = $_POST['ym'];
    $hr = $_POST['hr'];
    $jam = $_POST['jam'];

    $data1 = "insert into pengumuman (no,pengumuman,yang_lapor,hari,jam) values ('$no','$pe','$ym','$hr','$jam')";
    if ($koneksi->query($data1) === true) {
        echo "<script>alert('Telah Di Umumkan')</script>";
        echo "<script>window.location.replace('pengumuman.php');</script>";
    } else {
        echo "<script>alert('apalah')</script>";
    }
    
}
