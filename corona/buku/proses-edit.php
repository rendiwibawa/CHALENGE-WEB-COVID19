<?php 
include '../aset/header.php';
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

    $update = "UPDATE pasien SET nama ='$nama', alamat='$alamat', jenis_kelamin='$jeniskel', tlp='$tlp', tgl_terakhir='$tgl',suhu_tubuh='$suhu', status='$status' WHERE id_pasien =$id";
    $hasil = mysqli_query($kon, $update);
    }
    if($hasil)
    {
        header("Location: index.php");
    }else {
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
?>