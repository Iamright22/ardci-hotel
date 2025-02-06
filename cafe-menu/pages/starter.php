<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
            Starters <span class="dish-header-sub-t">(Good for 2-3 persons)</span>
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!-- Mojos an Dip card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Mojos & Dip</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="mojos-dip-p"> 
                        Deep fried potato slices with special dip.
                        </p>
                        <span class="in-prices">Price: &#8369;140.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Mojos-&-Dip' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Fresh Potato Fries card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Fresh Potato Fries</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="fresh-potato-p">
                            Deep-fried potato wedges with ARDCI special dip.
                        </p>
                        <span class="in-prices">Price: &#8369;130.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Fresh-Potato-Fries' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Onion Rings card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Onion Rings</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="onion-rings-p">
                        Deep-fried breaded onion rings.
                        </p>
                        <span class="in-prices">Price: &#8369;245.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Onion-Rings' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Beef Mango Nachos card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Beef Nachos</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="beef-mango-p">
                        Crunchy tortilla chips and ground beef topped with nacho cheese and salsa.
                        </p>
                        <span class="in-prices">Price: &#8369;280.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Beef-Mango-Nachos' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Potato Croquettes card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Potato Croquettes</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="potato-c-p">
                        Deep-fried mashed potato balls stuffed with cheese and a slide of special dip.
                        </p>
                        <span class="in-prices">Price: &#8369;345.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Potato-Croquettes' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Cheese Sticks card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Cheese Sticks</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="cheese-sticks-p">
                        Deep-fried wrapped cheese slices.
                        </p>
                        <span class="in-prices">Price: &#8369;120.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Cheese-Sticks' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Chicken and Chips Mojos card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Chicken and Chips Mojos</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="chicken-chips-mojos-p">
                        Chicken fillet and crispy mojos with special sauce.
                        </p>
                        <span class="in-prices">Price: &#8369;300.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Chicken-and-Chips-Mojos' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Quesadilla card REMOVE-->
        <!-- <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Quesadilla</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="quesadilla-p">
                        Pressed pita bread with cheese, meat and spices.
                        </p>
                        <span class="in-prices">Price: &#8369;280.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Quesadilla' onclick="starterArrayy(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a> -->
    </div>
</div>


<?php include 'includes-pages/footer.php'?>