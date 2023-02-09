<div class="formOfItem">
    <div class="imagePreview">
        <img src="image/Tripura_University_Logo.png" alt="item-image" id="previewImage">
    </div><br>
    <form action="new-item-inserted.php" method="post" enctype="multipart/form-data">
        <div class="itemimage">
            <input type="file" id="imageUrl" name="itemImage" onchange="previewed();" required>
        </div>
        <div class="item">
            <input type="text" name="itemName" placeholder="Item Name *" required>
        </div>
        <div class="price">
            <input type="number" name="itemRate" placeholder="price/item *" required>
        </div>
        <div class="qty">
            <input type="number" name="itemQty" placeholder="Qty. *" required>
        </div>
        <div class="itemAbout">
            <textarea name="itemAbout" cols="30" rows="10" placeholder="( Optional Area ) - You can add some details also"></textarea>
        </div>
        <br>
        <input type="submit" value="Store" name="store">
    </form>
</div>

<script>
    let imageUrl = document.getElementById("imageUrl");
    let previewImage = document.getElementById("previewImage");

    function previewed(){
        previewImage.src = imageUrl.value;
    }
</script>