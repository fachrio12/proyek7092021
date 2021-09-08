<?php

if($_POST){

    $id_pelanggan=$_POST['id_pelanggan'];
    $nama_pelanggan=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $telp=$_POST['telp'];

    
    if(empty($nama_pelanggan)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";

    } elseif(empty($telp)){

        echo "<script>alert('telpon tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";
    
    } else {

        include "koneksitoko.php";

       

            $update=mysqli_query($conn,"update pelanggan set nama='".$nama_pelanggan."',alamat='".$alamat."', telp='".$telp."' where id_pelanggan = '".$id_pelanggan."' ") ;

            if($update){

                echo "<script>alert('Sukses update pelanggan');location.href='tampilpelanggan.php';</script>";

            } else {

                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php';</script>";

            }

        

       

    }

}

?>