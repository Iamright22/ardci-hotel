<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
            Sandwiches <span class="dish-header-sub-t">(Served with fries)</span>
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!-- Cliffhanger card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Cliffhanger</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="cliffhanger-p">
                        Wheat bread with ham, boiled eggs, hotdogs and special dressing served with potato wedges.
                        </p>
                        <span class="in-prices">Price: &#8369;290.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Cliffhanger" onclick="sandwichArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Clubhouse card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Clubhouse</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="clubhouse-p">
                        Wheat bread with double ham, boiled eggs, hotdogs and special dressing served with french fries.
                        </p>
                        <span class="in-prices">Price: &#8369;265.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Clubhouse" onclick="sandwichArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Ham & Cheese -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Ham & Cheese</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="ham-cheese-p">
                        Ham and cheese topped with lettuce, tomato and cucumber slices.
                        </p>
                        <span class="in-prices">Price: &#8369;145.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Ham-&-Cheese" onclick="sandwichArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Breaded Chicken card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Breaded Chicken</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        White bread with breaded chicken breast and special sandwich dressing, served with french fries.
                        </p>
                        <span class="in-prices">Price: &#8369;240.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Breaded-Chicken" onclick="sandwichArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Liberty card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Liberty</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="liberty-p">
                        White bread, bacon, ham, cheese, vegetable, and fresh potato wedges.
                        </p>
                        <span class="in-prices">Price: &#8369;255.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Liberty" onclick="sandwichArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Bacon & Cheese card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Bacon & Cheese</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        White bread with bacon and cheese served with french fries.
                        </p>
                        <span class="in-prices">Price: &#8369;255.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Bacon-&-Cheese" onclick="sandwichArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>
            <!-- Egg Drop Sandwich card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Egg Drop Sandwich</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Toasted bread and scrambled egg sandwich, seasoned with fresh herbs and cheese.
                            </p>
                            <span class="in-prices">Price: &#8369;290.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Egg-Drop-Sandwich" onclick="sandwichArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

    </div>
</div>


<?php include 'includes-pages/footer.php'?>