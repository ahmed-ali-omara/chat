<?php
include("config.php");

if (isset($_POST["name"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $pass = $_POST["password"];

    $sql = mysqli_query
    ($conn,"INSERT INTO 'users'('Name','Username','Password') 
    VALUES('$name','$username','$pass')");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"constant="ie=edge">
    <title>register</title>
</head>
<style>

    body{
        background: white;
    }
    form{
        line-height: 50px;
        width:80%;
        padding:5px;
        margin: 20px auto;
        background: #eee;
    }
    input{
        width:80%;
    }
    </style>
    <body>
        <center>
            <form action=""method="post">
                <h2> انشاء حساب</h2>
                <input type="text" name="name"
                placeholder="Name">

                <input type="text" name="username"
                placeholder="username">

                <input type="text"
                name="pasword"
                placeholder="password">

                <br><a href="login.php">تسجيل الدخول</a>
                <br>
                <button type="submit">تسجيل </button>
</form>
</center>
</body>
</html>