<?php
session_start();

session_destroy();
header("Location: http://localhost/corona/hambur/index.php");

?>