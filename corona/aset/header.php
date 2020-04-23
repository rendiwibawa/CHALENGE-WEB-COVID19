<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/nilai/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/nilai/aset/fontawesome/css/all.min.css">

    <title>Admin Control</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"><i class="fas fa-hospital mr-2"></i>  RS.BINTANG MULIYA | Hai, Admin</a><br>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">

<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="#"></a>
<a class="nav-item nav-link" href="http://localhost/corona/logout.php">| Logout |</a>
<a class="nav-item nav-link" href="#"><i></i>
<?php 
include "../koneksi.php";
$date=date("l, d F Y | H:i:s |");
$tampil=mysqli_query($kon,"SELECT * from pasien");
$jumlah=mysqli_num_rows($tampil);
while ($data=mysqli_fetch_array($tampil)){
    $pinjam[] = $data;
}
echo " $date <br>";
?> </a>
</div>
</div>
</nav>
