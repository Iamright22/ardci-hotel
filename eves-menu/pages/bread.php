<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

        <!-- bread title -->
        <div class="category-main-title">
            <h2 class="catg-title">Breads</h2>
        </div>
        <div class="row">

            <!-- Garlic Bread card -->
                <a role="button" class="cards-anchor col-6">
                    <div class="menu-categories-card-container flex-grow-1">
                        <div class="mcc-ing-preview">
                            <div class="mcc-tilte-head">
                                <h1 class="mcc-title">Garlic Bread</h1>
                            </div>
                            <div class="mcc-ing">
                                <p class="garlic-bread-p">
                                   
                                </p>
                                <span class="in-prices">Price: &#8369;35.00</span>
                            </div>
                            <div class="add-list-con"><button class="add-list-btn" data-name="Garlic-Bread" onclick="breadArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                        </div>
                    </div>
                </a>
            <!-- Toasted Bread card -->
            <a role="button" class="cards-anchor col-6">
                <div class="menu-categories-card-container mccc-right flex-grow-1">
                    <div class="mcc-ing-preview">
                        <div class="mcc-tilte-head">
                            <h1 class="mcc-title">Toasted Bread</h1>
                        </div>
                        <div class="mcc-ing">
                            <p class="toasted-bread-p">
                                
                            </p>
                            <span class="in-prices">Price: &#8369;25.00</span>
                        </div>
                        <div class="add-list-con"><button class="add-list-btn" data-name="Toasted-Bread" onclick="breadArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                    </div>
                </div>
            </a>
            <div class="need-margin-bread"></div>

<?php include 'includes-pages/footer.php'?>