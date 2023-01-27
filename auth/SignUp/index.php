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

    <div class="formDivOuterUP">
        <div class="headerSection">
            <h2>SIGN UP</h2>
        </div>
        <form action="registered.php" method="post">
            <div class="userName">
                <input type="text" placeholder="Full Name*" name="userName" autofocus required>
            </div><br>
            <div class="userEmail">
                <input type="text" placeholder="Email*" name="userEmail" autofocus required>
            </div><br>
            <div class="userPass">
                <input type="password" placeholder="Password*" name="userPass" autofocus required>
            </div><br>
            <div class="userDeptt">
                <input type="text" placeholder="Department*" name="userDeptt" autofocus required>
            </div><br>
            <div class="userEnrol">
                <input type="text" placeholder="Enrollment No.*" name="userEnrol" autofocus required>
            </div><br>
            <input type="submit" class="signUpBtn" name="signUpBtn" value="SignUp">
        </form>
        <br>
        <hr>
        <div class="signUrlText">
            Already have an Account : <a href="../signIn">SignIn</a>
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