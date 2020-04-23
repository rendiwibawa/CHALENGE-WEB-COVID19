<?php
include './aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Input Nilai</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="simpan_anggota.php">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" name="nis" id="nis" placeholder="Masukkan NIS">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label><br>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                <option value="rpl">RPL</option>
                                <option value="tkj">TKJ</option>
                                <option value="mm">MM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label><br>
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="">Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        </form>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>