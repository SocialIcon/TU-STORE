<?php
    ob_start();
    session_start();
?>
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

$tableEmail = mysqli_query($conn,"SELECT * FROM `customer_details` where `Email`='$email'");
$tableEnroll = mysqli_query($conn,"SELECT * FROM `customer_details` where `Enrollment No`='$enrol'");


if($conn){
    if(isset($_POST['signUpBtn'])){
        if($email == mysqli_fetch_array($tableEmail)[2] || $enrol == mysqli_fetch_array($tableEnroll)[5]){
            echo "You are already registered! So, Sign In Please";
            header("Location: ../signIn/");
        }else{
            $insertData = "INSERT INTO `customer_details` (`FullName`, `Email`, `Password`, `Department`, `Enrollment No`) VALUES ('$fullname', '$email', '$passwordUser', '$deptt', '$enrol')";
            mysqli_query($conn, $insertData);
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
            header("Location: ../../shop/");
        }
    }
}else{
    mysqli_connect_error();
}

?>

<?php
    ob_end_flush();
?>