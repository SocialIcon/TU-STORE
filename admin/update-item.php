<div class="formOfItem">
    <div class="imagePreview">
        <img src="image/Tripura_University_Logo.png" alt="item-image" id="previewImage">
    </div><br>
    <form action="" method="post">
        <div class="itemimage">
            <input type="text" id="imageUrl" onchange="previewedUpdate();">
        </div>
        <div class="item">
            <input type="text" placeholder="Item Name">
        </div>
        <div class="price">
            <input type="number" placeholder="price/item">
        </div>
        <div class="qty">
            <input type="number" placeholder="Qty.">
        </div>
        <div class=""></div>
        <input type="submit" value="Update">
    </form>
</div>

<script>
    let imageUrl = document.getElementById("imageUrl");
    let previewImage = document.getElementById("previewImage");

    function previewedUpdate(){
        previewImage.src = imageUrl.value;
    }
</script>