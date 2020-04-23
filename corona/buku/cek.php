<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];
$sql = "SELECT suhu_tubuh FROM pasien WHERE id_pasien = $id_pasien";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_array($res)
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Cek Pasien</h3>
                </div>
                <div class="card-body">
                <form method="post"action="proses-edit.php" >
                    <div class="form-group">
                        <label for="suhu_tubuh">Suhu Tubuh</label>
                        <input type="text" value="<?php echo $detail['suhu_tubuh']; ?>" class="form-control" >
                    </div> 
                </form>   
                </div>
                <div class="form-group">
                <input type="hidden" name="id_pasien" value="<?php echo $detail['id_pasien'] ?>">
                <button type="submit" class="btn btn-primary" name="simpan" >Simpan</button>
                <button type="reset" onclick="window.location.href='index.php'"class="btn btn-danger" name="Batal">Batal</button>
                    </div>  
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';

?>