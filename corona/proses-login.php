<?php
session_start();
include 'koneksi.php';

if(isset($_POST['btnlogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM userlogin
            WHERE username='$username' AND password='$password'";
    $res = mysqli_query($kon, $sql);

    $count = mysqli_affected_rows($kon);
    if($count == 1)
    {
        $data_login = mysqli_fetch_assoc($res);

        header("Location: http://localhost/corona/buku/index.php");
    }
    else
    {   
        header("Location: http://localhost/corona/login.php");
    }

}
?>
