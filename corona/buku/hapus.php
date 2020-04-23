<?php

include '../koneksi.php';

if(isset($_GET['id_pasien']))
{
    $id_pasien = $_GET['id_pasien'];

    $sql = "DELETE FROM pasien WHERE id_pasien = $id_pasien";
    $res = mysqli_query($kon, $sql);
    $count = mysqli_affected_rows($kon);

    if($count == 1)
    {
        header("Location: index.php");
    }else {
        header("Location: index.php");
    }
}

?>