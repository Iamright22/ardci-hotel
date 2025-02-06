<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
             Pizzas <span class="dish-header-sub-t">(8 Slices)</span>
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!-- Supreme Pizza card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Supreme Pizza</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                            Topped with ham, ground meat, olives bellpepper and cheese.
                        </p>
                        <span class="in-prices">Price: &#8369;480.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Supreme-Pizza" onclick="pizzaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Hawaiian Pizza card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Hawaiian Pizza</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="hawaiian-pizza-p">
                            Topped with ham, pineapple and cheese.
                        </p>
                        <span class="in-prices">Price: &#8369;370.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Hawaiian-Pizza" onclick="pizzaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- ARDCI Pizza card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">ARDCI Pizza</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="ardci-pizza-p">
                            Topped with bacon, ground meat and cheese.
                        </p>
                        <span class="in-prices">Price: &#8369;510.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="ARDCI-Pizza" onclick="pizzaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- 3-Cheese Pizza card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">3-Cheese Pizza</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                            Topped with parmesan, melted cheese and cheddar cheese.
                        </p>
                        <span class="in-prices">Price: &#8369;410.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="3-Cheese-Pizza" onclick="pizzaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>
    </div>
</div>


<?php include 'includes-pages/footer.php'?>