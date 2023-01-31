<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TU STORE</title>
    <style>
        <?php 
            include "../style/custom.css"; 
            include "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";
            /*...*/
        ?>
    </style>
</head>
<body>

    <div class="search-bar">
        <form action="" method="post">
            <input type="search" placeholder="Item Name" autofocus>
            <input type="submit" value="Search">
        </form>
    </div>

    <div class="shop-list">
        <?php // require "feedback-list.php"; ?>
        <br>
        <?php // require "feedback-list.php"; ?>

        <h1 style="text-align:center;"><?php echo $_SESSION["fullname"]; ?></h1>
        <h3 style="text-align:center;"><?php echo $_SESSION["department"]; ?></h3>
        <h3 style="text-align:center;"><?php echo $_SESSION["enrollment"]; ?></h3>
        
        <form method="post">
            <input type="submit" value="Log Out" name="logout">
        </form>

        <?php

            if(array_key_exists('logout',$_POST)){
                logoutsession();
                gotoSignIn();
            }
            function gotoSignIn() {
                
                header("Location: ../auth/signIn/");
                
            }
            function logoutsession(){
                unset($_SESSION["email"],$_SESSION["fullname"],$_SESSION["department"],$_SESSION["enrollment"]);
                session_destroy();
            }
        ?>
    </div>

    <?php require "../menu-btn/index.php"; ?>
    <script src="https://kit.fontawesome.com/83a479628d.js" crossorigin="anonymous"></script>
    <script src="../js/script-related-style.js"></script>

    <script>
        // setTimeout(() => {
        //     window.open("auth/signIn","_self")
        // }, 3000);
    </script>
</body>
</html>

<?php
    ob_end_flush();
?>