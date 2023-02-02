<div class="formOfItem">
    <div class="imagePreview">
        <img src="image/Tripura_University_Logo.png" alt="item-image" id="previewImage">
    </div><br>
    <form action="" method="post">
        <div class="itemimage">
            <input type="text" id="imageUrl" onchange="previewed();">
        </div>
        <div class="item">
            <input type="text" placeholder="Item Name *" required>
        </div>
        <div class="price">
            <input type="number" placeholder="price/item *" required>
        </div>
        <div class="qty">
            <input type="number" placeholder="Qty. *" required>
        </div>
        <div class=""></div>
        <input type="submit" value="Store">
    </form>
</div>

<script>
    let imageUrl = document.getElementById("imageUrl");
    let previewImage = document.getElementById("previewImage");

    function previewed(){
        previewImage.src = imageUrl.value;
    }
</script>