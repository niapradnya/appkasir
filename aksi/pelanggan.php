<?php
session_start();
include "../koneksi.php";
include "../function.php";


if($_POST){
    if($_POST['aksi']=='tambah'){
    $PelangganID=$_POST['PelangganID'];
    $NamaPelanggan=$_POST['NamaPelanggan'];
    $Alamat=$_POST['Alamat'];
    $NomorTelepon=$_POST['NomorTelepon'];
    
    $sql="INSERT INTO pelanggan (PelangganID,NamaPelanggan,Alamat,NomorTelepon) VALUES (DEFAULT,'$NamaPelanggan','$Alamat','$NomorTelepon')";
    // echo $sql; // Cek perintah
    mysqli_query($koneksi,$sql);
    notifikasi($koneksi);
    header('location:../index.php?p=pelanggan');
    }
    else if($_POST['aksi']=='ubah'){
    $id_user=$_SESSION['id'];
    $PelangganID=$_POST['PelangganID'];
    $NamaPelanggan=$_POST['NamaPelanggan'];
    $Alamat=$_POST['Alamat'];
    $NomorTelepon=$_POST['NomorTelepon'];
        
       $sql="UPDATE pelanggan SET NamaPelanggan='$NamaPelanggan', Alamat='$Alamat', NomorTelepon='$NomorTelepon'  WHERE PelangganID=$PelangganID";
        // echo $sql; // Cek perintah
        mysqli_query($koneksi,$sql);
        notifikasi($koneksi);
        header('location:../index.php?p=pelanggan');
    }
}

if($_GET){
    if($_GET['aksi']=='hapus'){
        $PelangganID=$_GET['PelangganID'];
        $sql="DELETE FROM pelanggan WHERE PelangganID=$PelangganID";  // Hard Delete
        mysqli_query($koneksi,$sql);
        notifikasi($koneksi);
        header('location:../index.php?p=pelanggan');
    }
    
}