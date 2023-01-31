<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tu_store";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$email = $_POST['email'];
$passwordUser = $_POST['pass'];

// print_r($email);
// print_r($passwordUser);

//$table = "SELECT * FROM 'employees'";

//$insertData = "INSERT INTO 'employees' ('sno', 'name', 'role', 'doj') VALUES (2, 'Manish', 'Prog', '2022-06-13 14:04:51.000000')";

//mysqli_query($conn, $table);

//mysqli_query($conn, $insertData);

$tableEmail = mysqli_query($conn,"SELECT `Email` FROM `customer_details` where `Email`='$email'");

$resultEmail = mysqli_fetch_array($tableEmail)[0];

$tablePass = mysqli_query($conn,"SELECT `Password` FROM `customer_details` where `Email`='$email'");

$resultPass = mysqli_fetch_array($tablePass)[0];

// print($resultEmail);
// print($resultPass);
//mysqli_query($conn, "SELECT  `Password` FROM `customer_details` where `Password`='$passwordUser' and `Email`='$email'");



if($conn){
    if(isset($_POST['signInBtn'])){
        if($email == $resultEmail && $passwordUser == $resultPass){
            $userDetailByQuery = mysqli_query($conn,"SELECT * FROM `customer_details` where `Email`='$email' and `Password`='$passwordUser'");
            $userData = mysqli_fetch_array($userDetailByQuery);
            //print($userData[4]);
            //print($userData[2]);
            $_SESSION["email"] = "$email";
            $_SESSION["fullname"] = "$userData[1]";
            $_SESSION["department"] = "$userData[4]";
            $_SESSION["enrollment"] = "$userData[5]";

            ?>
                <i class="fas fa-circle-o-notch" style="font-size: 20pt; height: 50px; width: 50px;"></i>
                <script>
                     setTimeout(() => {
                         window.open("../../shop/","_self");
                     }, 10);
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Error");
                    setTimeout(() => {
                        window.open("index.php","_self");
                    }, 100);
                </script>
            <?php
        }
    }
}else{
    //mysqli_connect_error();
}

?>