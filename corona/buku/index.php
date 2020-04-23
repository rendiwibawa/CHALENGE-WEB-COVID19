
<?php
include '../koneksi.php';
$sql = "SELECT * FROM pasien ORDER BY img";
$res = mysqli_query($kon, $sql);
$anggota = array();

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
}

include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
    <div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-book"></i> Data Pasien</h2>
    <!DOCTYPE html>
<html lang="en">
 
<head>

<title>Corona Test</title>
 
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/nilai/aset/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/nilai/aset/fontawesome/css/all.min.css">
<style>
     
body {
    font-family: 'Roboto Condensed', sans-serif;  
    overflow: hidden;
    margin: 0;
    padding: 0;
   
}


/*------------------------ 2.2 Header ------------------------*/

.full-menu .fullmenu-content {
    height: 100%;
    width: 100%;
    display: table;
}

.page-menu {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.page-menu li {
    line-height: 50px;
    margin-left: -25px;
}

.page-menu li:last-child {
    line-height: 90px;
}

.page-menu li a {
    color: #fff;
    font-size: 26px;
    position: relative;
    font-weight: 500;
     
}

.social img {
    width: 15px;
}

.main .social {
    margin-top: 30px;
}

.social a {
    margin-right: 20px;
}

.social a:hover img {
    opacity: .6;
    transition: all ease 0.3s;
}

.social a:last-child {
    margin-right: 0px;
}

 
 

header {
    position: fixed;
    padding: 30px;
    top: 0;
    width: 100%;
    z-index: 2;
}


.nav-icon {
    width: 23px;
    height: 18px;
    position: relative;    
    transform: rotate(0deg);     
    transition: .5s ease-in-out;
    cursor: pointer;
    margin-top: 7px;
}

.nav-icon span {
    display: block;
    position: absolute;
    height: 2px;
    width: 100%;
    background: #fff;
    opacity: 1;    
    transform: rotate(0deg);   
    transition: .25s ease-in-out;
}

.nav-icon span:nth-child(1) {
    top: 0px;     
    transform-origin: left center;
}

.nav-icon span:nth-child(2) {
    top: 6px;    
    transform-origin: left center;
}

.nav-icon span:nth-child(3) {
    top: 12px;     
    transform-origin: left center;
    width: 60%;
    right: 0 !important;
}

.nav-icon:hover span:nth-child(3) {
    width: 100%;
}

</style>
</html>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahpasien"><i class="fas fa-plus"></i> 
Tambah Data Pasien
</button>

<!-- Modal Tambah Pasien-->
<div class="modal fade" id="tambahpasien" tabindex="-1" role="dialog" aria-labelledby="tambahpasienTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahpasienTitle"><i class="fas fa-user mr-2"></i>Tambah Data Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">
                    <form method="post"enctype="multipart/form-data" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Pasien"required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat pasien"required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kel">Jenis Kelamin</label><br>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"required>
                                <option value="">Jenis Kelamin</option>
                                <option value="L">L (Laki-Laki)</option>
                                <option value="P">P (Perempuan)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tlp">NO.Telphon</label>
                            <input type="number"class="form-control" name="tlp" id="tlp" placeholder="Masukkan NO.Telphon"required>
                        </div>
                        <div class="form-group">
                            <label for="suhu_tubuh">Suhu-Tubuh</label>
                            <input type="number" class="form-control" name="suhu_tubuh" id="suhu_tubuh" placeholder="Masukkan Suhu-Tubuh"required>
                        </div>
                        <div class="form-group">
                        <label for="datepicker">Tanggal Cek</label>
                        <input type="date" name="tgl_terakhir" class="form-control">
                       </div>
                        <div class="form-group">
                            <label for="status">Status Pasien</label><br>
                            <select name="status" id="status" class="form-control"required>
                                <option value="">Pilih Status</option>
                                <option value="PDP">PDP</option>
                                <option value="OTG">OTG</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="img">Foto pasien</label>
                            <input type="file" class="form-control" name="img" id="img" placeholder="Masukkan Gambar pasien">
                        </div> -->
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
      <button type="reset" onclick="window.location.href='index.php'"class="btn btn-danger" name="Batal">Batal</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- Akhir Tambah Pasien -->


<!-- akhir edit -->

  <div class="card-body">
  <table class="table table-striped ">
  <thead>
   <tr>
   <th scope="col">#</th>
   <th scope="col">Nama</th>
   <th scope="col">ID_Pasien</th>
   <th scope="col">ALamat</th>
   <th scope="col">Jenis Kelamin</th>
   <th scope="col">Tgl Cek</th>
   <th scope="col">Status</th>
   <th scope="col"></th>
   </tr>
</thead>
</div>
<?php
    $no = 1;
    foreach ($anggota as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['nama'] ?></th></td>
        <td><?= $p['id_pasien'] ?></th></td>
        <td><?= $p['alamat'] ?></th></td>
        <td><?= $p['jenis_kelamin'] ?></th></td>
        <td><?= $p['tgl_terakhir'] ?></th></td>
        <td><?= $p['status'] ?></th></td>
        <td>
        <a href="detail.php?id_pasien=<?= $p['id_pasien'] ?> "class="badge badge-success">Detail</a>
        <a href="cek.php?id_pasien=<?= $p['id_pasien'] ?> "class="badge badge-warning" name ="update">Edit</a>
        <a href="hapus.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-danger">Hapus</a>            
        </td>
    </tr>
                                        
<?php 
    $no++;
}
?>

</table>

<?php
include '../aset/footer.php';
?>