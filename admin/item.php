<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tu_store";

    $conn = mysqli_connect("$servername", "$username", "$password");
    mysqli_select_db($conn, "$dbname");

    $displayquery = "SELECT * FROM `storage_item`";

    $querydisplay = mysqli_query($conn, $displayquery);

    ?>

<div class="item-details">
    <table border="1">
        <thead>
            <tr>
                <th>S.NO.</th>
                <th>IMAGE</th>
                <th>ITEM</th>
                <th>QTY.</th>
            </tr>
        </thead>
        <tbody>

    <?php


    while($result = mysqli_fetch_array($querydisplay)){
        ?>
            <tr>
                <td><?php echo $result['SNO']; ?></td>
                <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($result['Image']); ?>" alt='item_image' /></td>
                <td><?php echo $result['Item']; ?></td>
                <td><?php echo $result['Price']; ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
    }
?>