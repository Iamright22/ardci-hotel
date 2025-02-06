<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
            Desserts
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!--Halo-halo card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Halo-halo</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="">
                            A colorful Filipino dessert layered with shaved ice, sweetened fruits, beans, and jellies, topped with leche flan and purple yam.
                        </p>
                        <span class="in-prices">Price: &#8369;180.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Halo-halo" onclick="dessertArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Fruit Salad card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Fruit Salad</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="happy-burger-p">
                            A mix of fruits with sweetened cream and condensed milk.
                        </p>
                        <span class="in-prices">Price: &#8369;150.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name="Fruit-Salad" onclick="dessertArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>
    </div>
</div>


<?php include 'includes-pages/footer.php'?>