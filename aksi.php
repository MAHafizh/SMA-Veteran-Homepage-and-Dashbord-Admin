<?php
include_once('connection.php');

function simpan_data()
{
    global $mysqli;
    $nama=$_POST['pendaftarNama'];
    $nisn=$_POST['pendaftarNISN'];
    $peminatan=$_POST['pendaftarMinat'];
    $smp=$_POST['pendaftarSMP'];
    $handphone=$_POST['pendaftarHP'];
    $jeniskelamin=$_POST['pendaftarJK'];
    $tgllahir=$_POST['TanggalLahir'];
    $agama=$_POST['pendaftarAgama'];
    $alamat=$_POST['pendaftarAlamat'];
    $tahunlulus=$_POST['tahunLulus'];

    $query="INSERT INTO form_siswa (nama, nisn, peminatan, smp, handphone, jeniskelamin, tanggal_lahir, agama, alamat, tahun_lulus) VALUES ('$nama', '$nisn', '$peminatan', '$smp', '$handphone', '$jeniskelamin', '$tgllahir', '$agama', '$alamat', '$tahunlulus')";
            
    $eksekusi=mysqli_query($mysqli, $query);
    
    if($eksekusi){
        echo "Proses Input Berhasil";
    }else{
        echo "Proses Input Gagal";
    }
}

function hapus_data()
{
    global $mysqli;
    $id_pendaftar=$_GET['id_pendaftar'];
    $query="DELETE FROM form_siswa WHERE id_pendaftar='$id_pendaftar'";
    $eksekusi=mysqli_query($mysqli, $query);
    if($eksekusi)
    {
        echo "Proses Hapus Berhasil";
    }else{
        echo "Proses Hapus Gagal";
    }
}

function update_data()
{
    global $mysqli;
    $id_pendaftar = isset($_POST['id_pendaftar']) ? $_POST['id_pendaftar'] : '';
    $nama=$_POST['pendaftarNama'];
    $nisn=$_POST['pendaftarNISN'];
    $peminatan=$_POST['pendaftarMinat'];
    $smp=$_POST['pendaftarSMP'];
    $handphone=$_POST['pendaftarHP'];
    $jeniskelamin=$_POST['pendaftarJK'];
    $tgllahir=$_POST['TanggalLahir'];
    $agama=$_POST['pendaftarAgama'];
    $alamat=$_POST['pendaftarAlamat'];
    $tahunlulus=$_POST['tahunLulus'];

    $query="UPDATE table_mahasiswa SET (nama, nisn, peminatan, smp, handphone, jeniskelamin, tanggal_lahir, agama, alamat, tahunlulus ) VALUES ('$nama', '$nisn', '$peminatan', '$smp', '$handphone', '$jeniskelamin', '$tgllahir', '$agama', '$alamat', '$tahunlulus')";
    $eksekusi=mysqli_query($mysqli, $query);
    if($eksekusi)
    {
        echo "Proses Update Berhasil";
    }else{
        echo "Proses Update gagal";
    }

    echo '<br> <br> <a href="data_mahasiswa.php">View Table of Data</a> <br>';
}

if(isset($_GET['proses']) and $_GET['proses']=='hapus')
{
    hapus_data();
}
else if(isset($_POST['proses']) and $_POST['proses']=='simpan')
{
    update_data();
}
else
{
    simpan_data();
}