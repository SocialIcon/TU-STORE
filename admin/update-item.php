<div class="formOfItem">
    <div class="imagePreview">
        <img src="image/Tripura_University_Logo.png" alt="item-image" id="previewImage">
    </div><br>
    <form action="update-item-inserted.php" method="post" enctype="multipart/form-data">
        <!--
        <div class="itemimage">
            <input type="file" id="imageUrl" name="itemImage" onchange="previewedUpdate();">
        </div>
        -->
        <div class="item">
            <select name="itemName" placeholder="Item Name">
                <option value="Chips">Chips</option>
            </select>
        </div>
        <div class="price">
            <input type="number" name="itemRate" placeholder="price/item">
        </div>
        <!--
        <div class="qty">
            <input type="number" name="itemQty" placeholder="Qty.">
        </div>
        <div class="itemAbout">
            <textarea name="itemAbout" cols="30" rows="10" placeholder="( Optional Area ) - You can add some details also"></textarea>
        </div>
        -->
        <br>
        <input type="submit" value="Update" name="update">
    </form>
</div>

<script>
    let imageUrl = document.getElementById("imageUrl");
    let previewImage = document.getElementById("previewImage");

    function previewedUpdate(){
        previewImage.src = imageUrl.value;
    }
</script>