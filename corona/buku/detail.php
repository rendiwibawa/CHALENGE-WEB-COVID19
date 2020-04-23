<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];
$sql = "SELECT * FROM pasien WHERE id_pasien = $id_pasien";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
        <h2 class="card-title"><i class="fas fa-user"></i> Detail Pasien</h2>
            <hr class="bg-light">                
                <table class="table table-bordered">
                <!-- <tr>
                    <td><strong></strong>
                    <img src="gambar/" <?php $detail['img']?> style="width: 25%"></td>                    
                    <td><?= $detail['img'] ?> -->
                    
                <?php
                // echo "<div id='img_div'>";
                //     echo "<img src='img/".$detail['img']."'>";
                // echo "</div>";
                ?>
                </td>
                </tr>
                <tr>
                    <td><strong>Nama Pasien</strong></td>                    
                    <td><?= $detail['nama'] ?></td>
                </tr>
                <tr>
                    <td><strong>ID Pasien</strong></td>                    
                    <td><?= $detail['id_pasien'] ?></td>
                </tr>
                <tr>
                    <td><strong>Alamat Pasien</strong></td>                    
                    <td><?= $detail['alamat'] ?></td>
                </tr>
                <tr>
                    <td><strong>Jenis Kelamin Pasien</strong></td>                    
                    <td><?= $detail['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                    <td><strong>Telphone Pasien</strong></td>                    
                    <td><?= $detail['tlp'] ?></td>
                </tr>
                <tr>
                    <td><strong>Suhu Tubuh Terakhir cek</strong></td>                    
                    <td><?= $detail['suhu_tubuh'] ?></td>
                </tr>
                <tr>
                    <td><strong>Tgl Terakhir cek</strong></td>                    
                    <td><?= $detail['tgl_terakhir'] ?></td>
                </tr>
                <tr>
                    <td><strong>Status Pasien</strong></td>                    
                    <td><?= $detail['status'] ?></td>
                </tr>
                
                </table>
                <button type="button" class="btn btn-warning mb-2" onclick="window.location.href='index.php'"><i class="fas fa-back"></i> Kembali</button>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>