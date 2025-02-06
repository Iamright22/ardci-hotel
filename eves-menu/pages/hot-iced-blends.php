<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

        <!-- hot/iced blends title -->
        <div class="category-main-title">
            <h2 class="catg-title allday-line starter-title pb-4">Hot/Iced <br> Blends</h2>
        </div>
        <div class="row">

            <!-- Americano card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Americano</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="">
                                Freshly pressed ground coffee beans.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="americano" id="americanoHot">
                                    <label class="form-check-label rice-checbox-label" for="americanoHot">
                                        &#8369;65.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="americano" id="americanoCold12">
                                    <label class="form-check-label rice-checbox-label" for="americanoCold12">
                                        &#8369;75.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="americano" id="americanoCold16">
                                    <label class="form-check-label rice-checbox-label" for="americanoCold16">
                                        &#8369;90.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="americano()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Café Latte card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Café Latte</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="cafe-latte-p">
                                Iced espresso with milk.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="cafeLatte" id="cafeLatteHot">
                                    <label class="form-check-label rice-checbox-label" for="cafeLatteHot">
                                        &#8369;90.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="cafeLatte" id="cafeLatteCold12">
                                    <label class="form-check-label rice-checbox-label" for="cafeLatteCold12">
                                        &#8369;95.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="cafeLatte" id="cafeLatteCold16">
                                    <label class="form-check-label rice-checbox-label" for="cafeLatteCold16">
                                        &#8369;110.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="cafeLatte()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- White Choco Latte card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">White Choco Latte</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="">
                                Espresso mixed with milk and white chocolate syrup.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="whiteChocoLatte" id="whiteChocoLatteHot">
                                    <label class="form-check-label rice-checbox-label" for="whiteChocoLatteHot">
                                        &#8369;100.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="whiteChocoLatte" id="whiteChocoLatteCold12">
                                    <label class="form-check-label rice-checbox-label" for="whiteChocoLatteCold12">
                                        &#8369;105.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="whiteChocoLatte" id="whiteChocoLatteCold16">
                                    <label class="form-check-label rice-checbox-label" for="whiteChocoLatteCold16">
                                        &#8369;160.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="whiteChocoLatte()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Cappuccino card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Cappuccino</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="capuccino-p">
                                Espresso, steamed milk, topped with choco powder.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="capuccino" id="capuccinoHot">
                                    <label class="form-check-label rice-checbox-label" for="capuccinoHot">
                                        &#8369;110.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="capuccino" id="capuccinoCold12">
                                    <label class="form-check-label rice-checbox-label" for="capuccinoCold12">
                                        &#8369;115.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="capuccino" id="capuccinoCold16">
                                    <label class="form-check-label rice-checbox-label" for="capuccinoCold16">
                                        &#8369;130.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="cappuccino()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Mochaccino card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Mochaccino</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="moch-p">
                                Espresso, steamed milk with chocolate syrup.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="mochaccino" id="mochaccinoHot">
                                    <label class="form-check-label rice-checbox-label" for="mochaccinoHot">
                                        &#8369;100.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="mochaccino" id="mochaccinoCold12">
                                    <label class="form-check-label rice-checbox-label" for="mochaccinoCold12">
                                        &#8369;105.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="mochaccino" id="mochaccinoCold16">
                                    <label class="form-check-label rice-checbox-label" for="mochaccinoCold16">
                                        &#8369;155.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="mochaccino()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Caramel Macchiato card -->
            <a role="button" class="cards-anchor col-6 flex-grow-1">
                <div class="menu-categories-card-container mccc-right">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Caramel Macchiato</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="">
                                Espresso, steamed milk with caramel syrup.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="caramelMacchiato" id="caramelMacchiatoHot">
                                    <label class="form-check-label rice-checbox-label" for="caramelMacchiatoHot">
                                        &#8369;105.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="caramelMacchiato" id="caramelMacchiatoCold12">
                                    <label class="form-check-label rice-checbox-label" for="caramelMacchiatoCold12">
                                        &#8369;110.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="caramelMacchiato" id="caramelMacchiatoCold16">
                                    <label class="form-check-label rice-checbox-label" for="caramelMacchiatoCold16">
                                        &#8369;165.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="caramelMacchiato()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Irish Latte card SUBJECT FOR REMOVAL-->
            <!-- <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Irish Latte</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="irish-latte-p">
                                Espresso, steamed milk, Kahlua and Baileys.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="irishLatte" id="irishLatteHot">
                                    <label class="form-check-label rice-checbox-label" for="irishLatteHot">
                                        &#8369;125.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="irishLatte" id="irishLatteCold12">
                                    <label class="form-check-label rice-checbox-label" for="irishLatteCold12">
                                        &#8369;125.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="irishLatte" id="irishLatteCold16">
                                    <label class="form-check-label rice-checbox-label" for="irishLatteCold16">
                                        &#8369;140.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="irishLatte()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a> -->

            <!-- Dark Choco Mocha card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Dark Choco Mocha</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="">
                                Dark chocolate syrup mixed with espresso and milk.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="darkChocoMocha" id="darkChocoMochaHot">
                                    <label class="form-check-label rice-checbox-label" for="darkChocoMochaHot">
                                        &#8369;125.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="darkChocoMocha" id="darkChocoMochaCold12">
                                    <label class="form-check-label rice-checbox-label" for="darkChocoMochaCold12">
                                        &#8369;135.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="darkChocoMocha" id="darkChocoMochaCold16">
                                    <label class="form-check-label rice-checbox-label" for="darkChocoMochaCold16">
                                        &#8369;140.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="darkChocoMoha()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Hazelnut Latte card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Hazelnut Latte</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="hazelnut-latte-p">
                                Espresso, steamed milk and hazelnut syrup.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="hazelnutLatte" id="hazelnutLatteHot">
                                    <label class="form-check-label rice-checbox-label" for="hazelnutLatteHot">
                                        &#8369;110.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="hazelnutLatte" id="hazelnutLatteCold12">
                                    <label class="form-check-label rice-checbox-label" for="hazelnutLatteCold12">
                                        &#8369;115.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="hazelnutLatte" id="hazelnutLatteCold16">
                                    <label class="form-check-label rice-checbox-label" for="hazelnutLatteCold16">
                                        &#8369;170.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="hazelnutLatte()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Salted Caramel Macchiato card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Salted Caramel Macchiato</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="">
                                Espresso, steamed milk and salted caramel syrup.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="saltedCaramelMc" id="saltedCaramelMcHot">
                                    <label class="form-check-label rice-checbox-label" for="saltedCaramelMcHot">
                                        &#8369;110.00 (Hot)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="saltedCaramelMc" id="saltedCaramelMcCold12">
                                    <label class="form-check-label rice-checbox-label" for="saltedCaramelMcCold12">
                                        &#8369;115.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="saltedCaramelMc" id="saltedCaramelMcCold16">
                                    <label class="form-check-label rice-checbox-label" for="saltedCaramelMcCold16">
                                        &#8369;180.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="saltedCaramelMc()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Hot Choco w/ Marshmallow card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Hot Choco w/ Marshmallow</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Hot chocolate drink with steamed milk topped with cocoa powder and marshmallow.
                            </p>
                            <span class="in-prices">Price: &#8369;130.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name='Hot Choco w/ Marshmallow' onclick="drinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
                </a>

            <!-- Espresso Con Panna card SUBJECT FOR REMOVAL-->
            <!-- <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Espresso Con Panna</h1>
                        </div>
                        <div class="mcc-ing ">
                            <p class="espersso-con-panna-p">
                                Espresso topped with whipped cream.
                            </p>
                            <span class="in-prices">Price: &#8369;100.00 (Hot)</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name='Espresso Con Panna' onclick="drinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a> -->

            <!-- Dirty Matcha card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Dirty Matcha</h1>
                        </div>
                        <div class="mcc-ing ">
                            <p class="dirty-matcha-p">
                                Matcha-flavored drink mixed with milk and ice.
                            </p>
                            <span class="in-prices">Price: &#8369;115.00 (Hot)</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name='Dirty Matcha' onclick="drinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Iced Oreo Bomb card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Iced Oreo Bomb</h1>
                        </div>
                        <div class="mcc-ing blends-bspace">
                            <p class="">
                                Crushed oreo and choco powder shake with choco syrup and milk.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="icedOreoBomb" id="icedOreoBombCold12">
                                    <label class="form-check-label rice-checbox-label" for="icedOreoBombCold12">
                                        &#8369;100.00 (Iced) (12oz)
                                    </label>
                                </div>
                                <div class="form-check form-bilao">
                                    <input class="form-check-input rice-checkbox" type="radio" name="icedOreoBomb" id="icedOreoBombCold16">
                                    <label class="form-check-label rice-checbox-label" for="icedOreoBombCold16">
                                        &#8369;165.00 (Iced) (16oz)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="icedOreoBomb()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

<?php include 'includes-pages/footer.php'?>