<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
            Burgers <span class="dish-header-sub-t dish-burger-sub-t">(Served with fries. Good for 1 person)</span>
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!-- Ultimate Burger card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Ultimate Burger</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        Special juicy patty with a slice of pineapple and cheese.
                        </p>
                        <span class="in-prices">Price: &#8369;220.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Ultimate-Burger" onclick="burgerArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Happy Island Burger card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Happy Island Burger</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="happy-burger-p">
                        Special juicy patty with ham, bacon, lettuce and cheese.
                        </p>
                        <span class="in-prices">Price: &#8369;230.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Happy-Island-Burger" onclick="burgerArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>
         <!-- BMC -->
         <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">BMC<br> <span class="bmc-sub">(Bacon, Mushroom, Cheese)</span></h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="bmc-p">
                                Bacon, Mushroom and Cheese burger.
                            </p>
                            <span class="in-prices">Price: &#8369;260.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="BMC" onclick="burgerArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>
    </div>
</div>


<?php include 'includes-pages/footer.php'?>