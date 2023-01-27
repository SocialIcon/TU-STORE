<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TU STORE</title>
    <style>
        <?php 
            include "../../style/custom.css"; 
            /*...*/
        ?>
    </style>
</head>
<body>

    <div class="formDivOuterIN">
        <div class="headerSection">
            <h2>SIGN IN</h2>
        </div>
        <form action="signed.php" method="post">
            <div class="user">
                <input type="text" placeholder="Email*" name="email" autofocus required>
            </div><br>
            <div class="pass">
                <input type="password" placeholder="Password*" name="pass" autofocus required>
            </div><br>
            <input type="submit" class="signInBtn" name="signInBtn" value="SignIn">
        </form>
        <br>
        <hr>
        <div class="signUrlText">
            For New Account : <a href="../signUp">SignUp</a>
        </div>
    </div>

    <script src="../../js/script-related-style.js"></script>

    <script>
        // setTimeout(() => {
        //     window.open("auth/signIn","_self")
        // }, 3000);
    </script>
</body>
</html>