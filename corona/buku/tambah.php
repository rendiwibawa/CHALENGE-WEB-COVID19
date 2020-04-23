<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Pasien</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-tambah.php">
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
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        <button type="reset" onclick="window.location.href='index.php'"class="btn btn-danger" name="Batal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../aset/footer.php';
?>

