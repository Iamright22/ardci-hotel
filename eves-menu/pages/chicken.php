<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

        <!-- chicken title -->
        <div class="category-main-title">
            <h2 class="catg-title starter-title">Chicken</h2>
            <p class="catg-subtitle starter-sub-title">Half - 6pcs, Whole - 12pcs</p>
        </div>
        <div class="row">
            <!-- Fried Chicken card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Fried<br>Chicken</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="fried-chicken-p">
                                Deep-fried marinated chicken.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="friedChicken" id="friedChickenHalf">
                                    <label class="form-check-label rice-checbox-label" for="friedChickenHalf">
                                        &#8369;335.00 <span style="font-size: 13px; font-weight: 600">Half</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="friedChicken" id="friedChickenWhole">
                                    <label class="form-check-label rice-checbox-label" for="friedChickenWhole">
                                        &#8369;610.00 <span style="font-size: 13px; font-weight: 600">Whole</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="friedChicken()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Crispy Chicken card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Crispy Chicken</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="crispy-chicken-p">
                                Deep-fried batter-coated chicken.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="crispyChicken" id="crispyChickenHalf">
                                    <label class="form-check-label rice-checbox-label" for="crispyChickenHalf">
                                    &#8369;325.00 <span style="font-size: 13px; font-weight: 600">Half</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="crispyChicken" id="crispyChickenWhole">
                                    <label class="form-check-label rice-checbox-label" for="crispyChickenWhole">
                                    &#8369;610.00 <span style="font-size: 13px; font-weight: 600">Whole</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="crispyChicken()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Buttered Chicken card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Buttered Chicken</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Deep-fried batter-coated chicken drizzled with melted butter.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="butteredChicken" id="butteredChickenHalf">
                                    <label class="form-check-label rice-checbox-label" for="butteredChickenHalf">
                                    &#8369;350.00 <span style="font-size: 13px; font-weight: 600">Half</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="butteredChicken" id="butteredChickenWhole">
                                    <label class="form-check-label rice-checbox-label" for="butteredChickenWhole">
                                    &#8369;685.00 <span style="font-size: 13px; font-weight: 600">Whole</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="butteredChicken()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Chicken Barbecue card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Chicken Barbecue</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="chicken-bbq">
                                Grilled chicken with barbecue sauce.
                            </p>
                            <div class="checkbox-price-con">
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="chickenBBQ" id="chickenBBQHalf">
                                    <label class="form-check-label rice-checbox-label" for="chickenBBQHalf">
                                     &#8369;290.00 <span style="font-size: 13px; font-weight: 600">Half</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="chickenBBQ" id="chickenBBQWhole">
                                    <label class="form-check-label rice-checbox-label" for="chickenBBQWhole">
                                    &#8369;565.00 <span style="font-size: 13px; font-weight: 600">Whole</span> <span style="font-size: 11px">(6pcs)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" onclick="chiceknBBQ()"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Chicken Nuggets w/ Mayo Dip card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Chicken Nuggets w/ Mayo Dip</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Chicken breast molded to nuggets, breaded and fixed with herb-seasoned mayo dip.
                            </p>
                            <span class="in-prices">Price: &#8369;300.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Chicken-Nuggets-w/-Mayo-Dip" onclick="chickenArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Chicken Sisig card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Chicken<br>Sisig</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="chicken-sisig-p">
                                Chopped chicken seasoned with soy sauce, onion, mayonnaise, served in sizzling plate.
                            </p>
                            <span class="in-prices">Price: &#8369;250.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Chicken-Sisig" onclick="chickenArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Chicken ala King card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Chicken a la King</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Creamy chicken dish made from chicken breast, vegetables and creamy sauce.
                            </p>
                            <span class="in-prices">Price: &#8369;425.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Chicken-a-la-King" onclick="chickenArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Chicken Wings card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1 mccc-right">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Chicken Wings</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Chicken wings marinated and seasoned with choice of sauce.
                            </p>
                            <div class="check-wings">
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="chickwings" id="chickwingsHoney">
                                    <label class="form-check-label rice-checbox-label" for="chickwingsHoney">
                                        Honey Garlic
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="chickwings" id="chickwingsBuffalo">
                                    <label class="form-check-label rice-checbox-label" for="chickwingsBuffalo">
                                        Buffalo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input rice-checkbox" type="radio" name="chickwings" id="chickwingsParmesan">
                                    <label class="form-check-label rice-checbox-label" for="chickwingsParmesan">
                                        Parmesan Cheese
                                    </label>
                                </div>
                                
                            </div>
                            <span class="in-prices">Price: &#8369;545.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Chicken-Teriyaki" onclick="chickenWings(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>

            <!-- Sweet Hawaiian Chicken Card-->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Sweet Hawaiian Chicken</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="">
                                Tender chicken glazed in sweet and savory sauce.
                            </p>
                            <span class="in-prices">Price: &#8369;350.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Sweet-Hawaiian-Chicken" onclick="chickenArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>
            

<?php include 'includes-pages/footer.php'?>