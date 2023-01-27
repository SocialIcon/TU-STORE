<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tu_store";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$fullname = $_POST['userName'];
$email = $_POST['userEmail'];
$passwordUser = $_POST['userPass'];
$deptt = $_POST['userDeptt'];
$enrol = $_POST['userEnrol'];

//$table = "SELECT * FROM 'employees'";

//$insertData = "INSERT INTO 'employees' ('sno', 'name', 'role', 'doj') VALUES (2, 'Manish', 'Prog', '2022-06-13 14:04:51.000000')";

//mysqli_query($conn, $table);

//mysqli_query($conn, $insertData);

if($conn){
    if(isset($_POST['signUpBtn'])){

        $insertData = "INSERT INTO `customer_details` (`FullName`, `Email`, `Password`, `Department`, `Enrollment No`) VALUES ('$fullname', '$email', '$passwordUser', '$deptt', '$enrol')";
        mysqli_query($conn, $insertData);
    }
}else{
    mysqli_connect_error();
}

?>