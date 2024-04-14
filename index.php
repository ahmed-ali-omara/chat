<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chat</title>
</head>
<body>
    <center><div class="user">
        <img src="user.jpg" width="50px">
        <h2> <?php
        echo $_SESSION["name"];
        ?> </h2>
        <a href="">تسجيل الخروج</a>
    </div></center>
    <div class="content" id ="mood">

<div class="mass2">
    <span id="mass2">صباح النور</span>
</div><br>
    </div>
    <div class="box">
<input type="text" 
placeholder="enter text" name="msg"
id="msg">
<button id="but"> <a href="">send</a>
</button>
    </div>
    <script>
        setInterval(function(){
            $(document).ready(function(){
            $.ajax({ url: "fetch.php",success:function (result)
        {$("#mood").html(result);

        }});
        });},1000);
     

        
      $(document).ready(function(){
        $("#but").click(function(){
            let msg =$("#msg").val();
            $.ajax({
                type:"POST",
                url:"send.php",
                data:{
                    msg:msg
                },
                success:function(){
                $("#msg").val('');
            } 
            });
        });
      });    </script>
</body>
</html>