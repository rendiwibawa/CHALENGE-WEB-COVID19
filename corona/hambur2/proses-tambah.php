<?php
include '../koneksi.php';
if (isset($_POST['simpan'])){
    $id_tes = $_POST['id_tes'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskel = "";
    if($_POST['jenis_kelamin'] == "L"){
        $jeniskel = "L";
    }else if($_POST['jenis_kelamin'] == "P"){
        $jeniskel = "P";
    }
    $tlp = $_POST['tlp'];
    $tgl = $_POST['tgl_terakhir'];
    // 
    $tes1 = "";
    if($_POST['tes1'] == 1){
        $tes1 = "Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.";
        echo"Segera Periksakanlah";
    }else if($_POST['tes1'] == 2){
        $tes1 = "Alhamdulilah Sehat";
    }
    // 
    $tes2 = "";
    if($_POST['tes2'] == 1){
        $tes2 = "Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.";
    }else if($_POST['tes2'] == 2){
        $tes2 = "Alhamdulilah Sehat";
    }
    // 
    $tes3 = "";
    if($_POST['tes3'] == 1){
        $tes3 = "Sebagai tindakan pencegahan, Pemprov Jatim meminta siapa saja yang mengalami gejala (demam, batuk, bersin, sakit tenggorokan, atau sulit bernapas) untuk tinggal di rumah selama 14 hari untuk mencegah penyebaran. Anda disarankan untuk tidak keluar ke tempat publik, tinggal dirumah saja dan tidak boleh ada tamu. Anda disarankan untuk menelepon call center Pemprov Jatim, di mohon anda jangan berangkat ke UGD, Rumah sakit, atau klinik, kecuali kalau gejala anda semakin buruk segera pergi ke dokter terdekat.	";
    }else if($_POST['tes3'] == 2){
        $tes3 = "Tetplah Berada Di Rumah";
    }
    // 
    $tes4 = "";
    if($_POST['tes4'] == 1){
        $tes4 = "Sebagai tindakan pencegahan, Pemprov Jatim meminta siapa saja yang mengalami gejala (demam, batuk, bersin, sakit tenggorokan, atau sulit bernapas) untuk tinggal di rumah selama 14 hari untuk mencegah penyebaran. Anda disarankan untuk tidak keluar ke tempat publik, tinggal dirumah saja dan tidak boleh ada tamu. Penyakit anda ada kemungkinan sembuh sendiri dengan cukup makan dan istirahat. Anda disarankan untuk menelepon call center COVID-19 Pemprov Jatim di  
        Mohon anda jangan berangkat ke UGD, Rumah sakit, atau klinik, kecuali kalau gejala anda semakin buruk segera pergi ke dokter terdekat. ";
    }else if($_POST['tes4'] == 2){
        $tes4 = "Hindari kontak dengan Pasien Positiv dan hindari Berkerumun";
    }
    $sql = "INSERT INTO cek VALUES ('$id_tes','$nama', '$alamat', '$jeniskel', '$tlp','$tgl', '$tes1','$tes2', '$tes3','$tes4')";
    $res = mysqli_query($kon, $sql);
    $count = mysqli_affected_rows($kon);

    if ($count == 1) {
        header("Location: kesimpulan.php");
    } else {
        echo"Error";
    }
}else{
    header("Location: index.php");
}
?>