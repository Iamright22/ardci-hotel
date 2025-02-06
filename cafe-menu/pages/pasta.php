<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
            Pasta <span class="dish-header-sub-t dish-burger-sub-t">(Served with garlic bread)</span>
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!-- Ham & Mushroom Penne card -->
        <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Ham & Mushroom Penne</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="hamMuhsroom-p">
                                Penne pasta with ham & mushroom in white creamy sauce.
                            </p>
                            <span class="in-prices">Price: &#8369;190.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Ham-&-Mushroom-Penne" onclick="pastaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

             <!-- Bolognese card -->
             <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Bolognese</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="bolognese-p">
                                Spaghetti pasta in bolognese sauce infused with red wine and herbs.
                            </p>
                            <span class="in-prices">Price: &#8369;345.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Bolognese" onclick="pastaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Carbonara card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Carbonara</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="carbonara-p">
                                Spaghetti pasta with bits of bacon and ham in creamy white sauce.
                                <div class="checkbox-price-con">
                                    <div class="form-check">
                                        <input class="form-check-input rice-checkbox" type="radio" name="carbonaraR" id="carbonaraPlater">
                                        <label class="form-check-label rice-checbox-label" for="carbonaraPlater">
                                            &#8369;320.00 (platter)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input rice-checkbox" type="radio" name="carbonaraR" id="carbonaraSingle">
                                        <label class="form-check-label rice-checbox-label" for="carbonaraSingle">
                                            &#8369;235.00 (single)
                                        </label>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Carbonara" onclick="cabonara(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Spaghetti card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Spaghetti</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Spaghetti pasta with bits of ground pork in creamy red sauce.
                                <div class="checkbox-price-con">
                                    <div class="form-check">
                                        <input class="form-check-input rice-checkbox" type="radio" name="spaghettiR" id="spaghettiPlater">
                                        <label class="form-check-label rice-checbox-label" for="spaghettiPlater">
                                            &#8369;280.00 (platter)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input rice-checkbox" type="radio" name="spaghettiR" id="spaghettiSingle">
                                        <label class="form-check-label rice-checbox-label" for="spaghettiSingle">
                                            &#8369;200.00 (single)
                                        </label>
                                    </div>
                                </div>
                            </p>
                            <!-- <span class="in-prices">Price: &#8369;140.00</span> -->
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Spaghetti" onclick="spaghetti(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Bacon, Mac & Cheese card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Bacon, Mac & Cheese</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Macaroni pasta in red sauce mixed with bacon and cheese.
                            </p>
                            <span class="in-prices">Price: &#8369;150.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Bacon,-Mac-&-Cheese" onclick="pastaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Baked Ziti card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Baked Ziti</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Baked penne pasta with ground meat, red sauce, infused with red wine and cheese.
                            </p>
                            <span class="in-prices">Price: &#8369;495.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Baked-Ziti" onclick="pastaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

             <!-- Lasagna w/ Cream Cheese card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Lasagna w/ Cream Cheese</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Lasagna sheets with ground meat and cheese in-between with red sauce infused with red wine and cream cheese.
                            </p>
                            <span class="in-prices">Price: &#8369;290.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Lasagna-w/-Cream-Cheese" onclick="pastaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Italian Sardines card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Italian Sardines</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="italian-sardines-p">
                                Spaghetti pasta in olive oil and spanish sardines topped with garlic and other herbs.
                            </p>
                            <span class="in-prices">Price: &#8369;250.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Italian-Sardines" onclick="pastaArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>
    </div>
</div>


<?php include 'includes-pages/footer.php'?>