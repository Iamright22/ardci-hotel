<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
            Frappes
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!--Berry Velvet card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Berry Velvet</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        Strawberry syrup, milk, and crushed ice topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;190.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Berry Velvet' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Javalicious card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Javalicious</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        Java chips, choco, milk, crushed ice, topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;175.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Javalicious' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Crusty Crunch card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Crusty Crunch</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="crusty-p">
                        Oreo cookies blended with milk, crushed ice, topped with whipped cream and crushed oreo.
                        </p>
                        <span class="in-prices">Price: &#8369;145.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Crusty Crunch' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Strawberry Cucumber card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Strawberry Cucumber</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        Strawberry syrup and cucumber slices blended with milk, crushed ice and topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;125.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Strawberry Cucumber' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Choco Loco card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Choco Loco</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        White choco powder and dark chocolate syrup, blended with milk, crushed ice and topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;230.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Choco Loco' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Oh! Green Tea card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Oh! Green Tea</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="oh-green-tea-p">
                        Matcha green tea powder, blended with milk, crushed ice and topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;155.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Oh! Green Tea' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Java Peppermint card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Java Peppermint</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        Java chip powder, peppermint syrup, blended with milk, crushed ice and topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;220.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Java Peppermint' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Oreo Espresso Mocha card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Oreo Espresso Mocha</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="oreo-espressoM-p">
                        Espresso and oreo cookies, blended with milk, crushed ice and topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;200.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Oreo Espresso Mocha' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Vanilla Sky card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Vanilla Sky</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="vanilla-sky-p">
                        Espresso and vanilla powder, blended with milk, crushed ice.
                        </p>
                        <span class="in-prices">Price: &#8369;145.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Vanilla Sky' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Vanilla Matcha -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Vanilla Matcha</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        Vanilla syrup and matcha powder blended with milk, crushed ice, topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;220.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Vanilla Matcha' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Vanilla Strawberry card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Vanilla Strawberry</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                        Vanilla powder and strawberry syrup blended with vanilla ice cream, milk, crushed ice, topped with whipped cream.
                        </p>
                        <span class="in-prices">Price: &#8369;190.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Vanilla Strawberry' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>
                      <!-- NEW -->
              <!-- Cheesy Mango Matcha -->
              <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Cheesy Mango</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                A blend of ripe mango and creamy cheese, topped with whipped cream.
                            </p>
                            <span class="in-prices">Price: &#8369;220.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name='Cheesy Mango' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>
            
             <!-- Matcha Cake Frost card -->
             <a role="button" class="cards-anchor col-6">
                    <div class="menu-categories-card-container flex-grow-1">
                        <div class="mcc-ing-preview">
                            <div class="mcc-tilte-head">
                                <h1 class="mcc-title">Matcha Cake Frost</h1>
                            </div>
                            <div class="mcc-ing">
                                <p class="">
                                   Creamy matcha and frosty frappe, topped with whipped cream and a hint of matcha powder.
                                </p>
                                <span class="in-prices">Price: &#8369;230.00</span>
                            </div>
                            <div class="add-list-con"><button class="add-list-btn" data-name='Matcha Cake Frost' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                        </div>
                    </div>
                </a>

              <!-- Dark Choco Cake Frost card -->
              <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Dark Choco Cake Frost</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Chocolate with a creamy, frost base. Topped with whipped cream and a drizzle of choco bits.
                            </p>
                            <span class="in-prices">Price: &#8369;195.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name='Dark Choco Cake Frost' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

             <!-- Red Velvet Cake Frost card -->
             <a role="button" class="cards-anchor col-6">
                    <div class="menu-categories-card-container flex-grow-1">
                        <div class="mcc-ing-preview">
                            <div class="mcc-tilte-head">
                                <h1 class="mcc-title">Red Velvet Cake Frost</h1>
                            </div>
                            <div class="mcc-ing">
                                <p class="">
                                    Rich flavor of red velvet cake with creamy, icy blend, topped with whipped cream.
                                </p>
                                <span class="in-prices">Price: &#8369;180.00</span>
                            </div>
                            <div class="add-list-con"><button class="add-list-btn" data-name=' Red Velvet Cake Frost' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                        </div>
                    </div>
                </a>

              <!-- Ube Cake Frost Matcha -->
              <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Ube Cake Frost</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                               Creamy flovor of ube cake with a frosty, smooth base. Topped with whipped cream and sprinkle of ube crumbs.
                            </p>
                            <span class="in-prices">Price: &#8369;200.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name='Ube Cake Frost' onclick="frappesArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

    </div>
</div>


<?php include 'includes-pages/footer.php'?>