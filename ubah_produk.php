<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "koneksitoko.php";

    $qry_get_petugas=mysqli_query($conn,"select * from produk where

id_produk = '".$_GET['id_produk']."'");

    $dt_petugas=mysqli_fetch_array($qry_get_petugas);

    ?>

    <h3>ubah produk</h3>

    <form action="proses_ubah_produk.php" method="post">

        <input type="hidden" name="id_produk" value=

  "<?=$dt_petugas['id_produk']?>">

        nama produk:

  <input type="text" name="nama_produk" value=   "<?=$dt_petugas['nama_produk']?>" class="form-control">

        deskripsi :

  <input type="text" name="deskripsi" value="<?=$dt_petugas['deskripsi']?>" class="form-control">

       harga :

       <input type="text" name="harga" value="<?=$dt_petugas['harga']?>" class="form-control">

     foto produk :

<input type="text" name="foto_produk" value="<?=$dt_petugas['foto_produk']?>" class="form-control">

        

<input type="submit" name="simpan" value="Ubah produk" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>