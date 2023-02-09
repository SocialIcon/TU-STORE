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
            <input type="search" placeholder="Item Name / Price" autofocus>
            <input type="submit" value="Search">
        </form>
    </div>

    <div class="shop-list">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tu_store";

    if($_SESSION['fullname']!=NULL){

    $conn = mysqli_connect("$servername", "$username", "$password");
    mysqli_select_db($conn, "$dbname");

    $displayquery = "SELECT * FROM `storage_item`";

    $querydisplay = mysqli_query($conn, $displayquery);

    ?>

    <?php


    while($result = mysqli_fetch_array($querydisplay)){
        ?>
        <?php require "shop-list.php"; ?>
        <br>

        <?php
    }
}else{
    error_reporting();
}
?>
    </div>

    <?php require "../menu-btn/index.php"; ?>

    <script src="https://kit.fontawesome.com/83a479628d.js" crossorigin="anonymous"></script>
    <script src="../js/script-related-style.js"></script>

</body>
</html>

<?php
    ob_end_flush();
?>