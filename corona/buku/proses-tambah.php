<?php
include '../koneksi.php';
if (isset($_POST['simpan'])){
    $id = $_POST['id_pasien'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskel = "";
    if($_POST['jenis_kelamin'] == "L"){
        $jeniskel = "L";
    }else if($_POST['jenis_kelamin'] == "P"){
        $jeniskel = "P";
    }
    $tlp = $_POST['tlp'];
    $suhu = $_POST['suhu_tubuh'];
    $tgl = $_POST['tgl_terakhir'];
    $img = $_FILES['img']['name'];
    $dir = $_FILES['img']['tmp_name'];
    $status = "";
    if($_POST['status'] == "PDP"){
        $status = "PDP";
    }else if($_POST['status'] == "OTG"){
        $status = "OTG";
    }
    $sql = "INSERT INTO pasien VALUES ('$id', '$nama', '$alamat', '$jeniskel', '$tlp', '$tgl','$suhu', '$status','$img')";
    $res = mysqli_query($kon, $sql);
    move_uploaded_file($dir,"buku/".$img);
    $count = mysqli_affected_rows($kon);

    if ($count == 1) {
        header("Location: index.php");
    } else {
        echo"Error";
    }
}else{
    header("Location: index.php");
}
?>