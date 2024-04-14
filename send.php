<?php
include("config.php");
if (isset($_POST["msg"])){
    $mss = $_POST["msg"];
    mysqli_query($conn,"INSERT INTO 'moon'('Mass')VALUES('$mss')");

}
?>