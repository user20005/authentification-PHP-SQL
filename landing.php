<?php

session_start();
if ($_SESSION["autoriser"] != "oui") {
  header("location:index.html");
  exit();
}
$bonjour = "Bienvenue  " .$_SESSION["user"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css");
        body {
            width: 90vw;
            height: 90vh;
            background: rgb(49, 49, 59);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1{
            border: 0.3px solid rgb(6, 106, 255);
            padding: 50px;
            box-shadow: 2px 1px 15px 9px rgba(6, 106, 255, 0.4);
            zoom: 1.4;
        }
       
        i{
            margin-left: 30px;
            color: red;
        }
    </style>
</head>

<body>
    <h1><div class="f"><?php echo $bonjour ?>
    <a href="deco.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
</a></div>
</h1>
    
</body>

</html>