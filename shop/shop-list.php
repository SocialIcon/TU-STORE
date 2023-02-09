
 


<div class="item-details">
    <div class="image-section">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($result['Image']); ?>" alt='item-name-image' />
    </div>
    <div class="about-section">
        <h3><?php echo $result['Item']; ?></h3>
        <h3>Rs. <?php echo $result['Price']; ?> /-</h3>
    </div>
    <div class="qty-section">
        <div class="qty-counter">
            0
        </div>
        <div class="qty-setter">
            <div class="increment fa fa-plus"></div><hr>
            <div class="decrement fa fa-minus"></div>
        </div>
    </div>
</div>

