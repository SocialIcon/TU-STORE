<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tu_store";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $itemName = NULL;
    $itemRate = NULL;
    $itemQty = NULL;
    $itemAbout = NULL;

    if($conn){
        if(isset($_POST["update"])){

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

                    $updateItemToStore = "UPDATE `storage_item` SET `Item`='$itemName' OR `Qty`='$itemQty' OR `Price`='$itemRate' OR `About`='$itemAbout' OR `Image`='$imgContent' Where `Item`='$itemName'";
                    mysqli_query($conn, $updateItemToStore);
                }
            }
        }
    }else{

    }



?>