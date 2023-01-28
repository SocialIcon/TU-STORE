<div class="btn-bar">
    <div class="round feedback-btn" id="feedbackBtn">
        <i class="fa-brands fa-product-hunt"></i>
    </div><hr>
    <div class="round" id="advanceOrderBtn">
        <i class="fa fa-first-order"></i>
    </div><hr>
    <div class="round shop-btn" id="shopBtn">
        <i class="fa-solid fa-shop"></i>
    </div><hr>
    <div class="round" id="historyBtn">
        <i class="fa fa-history"></i>
    </div><hr>
    <div class="round usr-btn" id="userDashboardBtn">
        <i class="fas fa-user"></i>
    </div>
</div>

<script>
        // setTimeout(() => {
        //     window.open("auth/signIn","_self")
        // }, 3000);

        let feedbackBtn = document.getElementById("feedbackBtn");
        let advanceOrderBtn = document.getElementById("advanceOrderBtn");
        let shopBtn = document.getElementById("shopBtn");
        let historyBtn = document.getElementById("historyBtn");
        let userDashboardBtn = document.getElementById("userDashboardBtn");
        
        feedbackBtn.addEventListener("click",() => {
            window.open("../feedback/","_self");
        });

        advanceOrderBtn.addEventListener("click",() => {
            window.open("../advancedOrder/","_self");
        });

        shopBtn.addEventListener("click",() => {
            window.open("../shop/","_self");
        });

        historyBtn.addEventListener("click",() => {
            window.open("../history/","_self");
        });

        userDashboardBtn.addEventListener("click",() => {
            window.open("../userDashboard/","_self");
        });
    </script>