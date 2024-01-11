<?php
session_start();
include "../koneksi.php";
include "../function.php";


if($_POST){
    if($_POST['aksi']=='tambah'){
    $ProdukID=$_POST['ProdukID'];
    $Barcode=$_POST['Barcode'];
    $NamaProduk=$_POST['NamaProduk'];
    $Harga=$_POST['Harga'];
    $Stok=$_POST['Stok'];
    
    $sql="INSERT INTO produk (ProdukID,Barcode,NamaProduk,Harga,Stok) VALUES(DEFAULT,'$Barcode','$NamaProduk','$Harga','$Stok')";
    // echo $sql; // Cek perintah
    mysqli_query($koneksi,$sql);
    notifikasi($koneksi);
    header('location:../index.php?p=produk');
    }
    else if($_POST['aksi']=='ubah'){
        $ProdukID=$_POST['ProdukID'];
        $Barcode=$_POST['Barcode'];
        $NamaProduk=$_POST['NamaProduk'];
        $Harga=$_POST['Harga'];
        $Stok=$_POST['Stok'];
        
       $sql="UPDATE produk SET Barcode='$Barcode', NamaProduk='$NamaProduk', Harga='$Harga', Stok='$Stok' WHERE ProdukID=$ProdukID";
        // echo $sql; // Cek perintah
        mysqli_query($koneksi,$sql);
        notifikasi($koneksi);
        header('location:../index.php?p=produk');
    }
}

if($_GET){
    if($_GET['aksi']=='hapus'){
        $ProdukID=$_GET['ProdukID'];
        $sql="DELETE FROM produk WHERE ProdukID=$ProdukID";  // Hard Delete
        mysqli_query($koneksi,$sql);
        notifikasi($koneksi);
        header('location:../index.php?p=produk');
    }

}