<?php
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
            ?>
                <h1>Successfully Loginned!</h1>
            <?php
        }else{
            ?>
                <script>
                    alert("Error");
                    setTimeout(() => {
                        window.open("index.php","_self")
                    }, 100);
                </script>
            <?php
        }
    }
}else{
    //mysqli_connect_error();
}

?>