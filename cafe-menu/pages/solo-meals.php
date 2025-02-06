<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
             Solo Meals <span class="dish-header-sub-t dish-burger-sub-t">(Served w/ rice, buttered veggies, Iced tea)</span>
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!-- Pork Siomai card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 ">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Pork Siomai</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Steamed savory and juice pork dumplings.
                        </p>
                        <span class="in-prices">Price: &#8369;175.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Pork-Siomai'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Chicken Fingers card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 mccc-right">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Chicken Fingers</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Breaded and deep-fried long, chicken fillet strips.
                        </p>
                        <span class="in-prices">Price: &#8369;150.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Chicken-Fingers'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Calamares card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 ">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Calamares</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Crispy, golden-fried calamari rings.
                        </p>
                        <span class="in-prices">Price: &#8369;145.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Calamares'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Crabsticks card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 mccc-right">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Crabsticks</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Cripsy, golden-brown crabsticks
                        </p>
                        <span class="in-prices">Price: &#8369;155.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Crabsticks'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Shrimp Lumpia card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 ">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Shrimp Lumpia</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Crispy, golden shrimp rolls
                        </p>
                        <span class="in-prices">Price: &#8369;155.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Shrimp-Lumpia'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Pork Sisig card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 mccc-right">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Pork Sisig</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Savory and crispy dish made from seasoned pork, onions, and chili.
                        </p>
                        <span class="in-prices">Price: &#8369;210.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Pork-Sisig'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Chicken Buffalo Wings card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 ">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Chicken Buffalo Wings</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Spicy and tangy chicken wings, coated in a zesty sauce.
                        </p>
                        <span class="in-prices">Price: &#8369;175.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Chicken-Buffalo-Wings'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Pork Lumpia card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 mccc-right">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Pork Lumpia</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Fried rolls filled with savory seasoned pork and vegetables.
                        </p>
                        <span class="in-prices">Price: &#8369;115.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Pork-Lumpia'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Tonkatsu card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 ">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Tonkatsu</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                            Breaded and deep-fried pork cutlet. served with a tangy tonkatsu sauce 
                        </p>
                        <span class="in-prices">Price: &#8369;200.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Tonkatsu'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Pork Liempo card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 mccc-right">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Pork Liempo</h1>
                    </div>
                    <div class="mcc-ing">
                        <p>
                           Grilled marinated pork belly.
                        </p>
                        <span class="in-prices">Price: &#8369;205.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Pork-Liempo'onclick="soloMealsArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>
    </div>
</div>


<?php include 'includes-pages/footer.php'?>