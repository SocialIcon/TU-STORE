<?php
    error_reporting(0);
    ob_start();
    session_start();

    if($_SESSION["fullname"] != NULL){
        header("Location: shop/");
    }
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
            include "style/custom.css"; 
            /*...*/
        ?>
    </style>
</head>
<body>
    <div class="container">
        <img src="image/Tripura_University_Logo.png" alt="logo">
    </div>
    <script src="js/script-related-style.js"></script>

    <script>
        setTimeout(() => {
            window.open("auth/signIn","_self")
        }, 1000);
    </script>
</body>
</html>

<?php
    ob_end_flush();
?>