<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tu_store";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn){
        if(isset($_POST["store"])){

            $itemName = $_POST["itemName"];
            $itemRate = $_POST["itemRate"];
            $itemQty = $_POST["itemQty"];
            $itemAbout = $_POST["itemAbout"];


            $status = 'error'; 
            if(!empty($_FILES["itemImage"]["name"])) {

                $itemImage = basename($_FILES["itemImage"]["name"]);
                $fileType = pathinfo($itemImage, PATHINFO_EXTENSION);

                $allowTypes = array('jpg','png','jpeg','gif'); 

                if(in_array($fileType, $allowTypes)){
                
                    $image = $_FILES['itemImage']['tmp_name']; 
                    $imgContent = addslashes(file_get_contents($image));

                    $insertItemToStore = "INSERT INTO `storage_item` (`Item`, `Qty`, `Price`, `About`, `Image`) VALUES ('$itemName', '$itemQty', '$itemRate', '$itemAbout', '$imgContent')";
                    mysqli_query($conn, $insertItemToStore);
                }
            }
        }
    }else{

    }



?>