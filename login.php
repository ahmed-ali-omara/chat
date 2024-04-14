<?php
include("config.php");

if(isset($_POST["username"])){
$user =$_POST["username"];
$pass =$_POST["password"];
$data =mysqli_query($conn,"SELECT * FROM users WHERE Username ='$user' AND Password ='$pass'");
$row =mysqli_fetch_array($data);
if ($user == $row["Username"]&& $pass == $row["Password"]){
    $_SESSION["name"] =$row["Name"];
    $_SESSION["user"] =$row["Username"];
    $_SESSION["id"] =$row["id"];
header("LOCATION: index.php");

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"constant="ie=edge">
    <title>login</title>
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
                <h2>تسجيل الدخول</h2>
                <input type="text" name="username"
                placeholder="username">

                <input type="text"
                name="pasword"
                placeholder="password">

                <br><a href="register.php">انشاء حساب</a>
                <br>
                <button type="submit">تسجيل </button>
</form>
</center>
</body>
</html>