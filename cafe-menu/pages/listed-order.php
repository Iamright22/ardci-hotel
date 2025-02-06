<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>


        <div class="quantity-padding"></div>
        <div class="quantity-container">
            <h3 class="quantity-title" id="qtyTitle">
            List of Orders
            <span class="list-order-reminder" id="subTitle">(Please select the quantity of your order)</span>
            </h3>
            <div class="message-null" id='messageNull' style="display: none;">
                <p>Please choose an item from the menu page before continuing further on this page.</p>
            </div>
            <!-- hot/iced blends -->
            <div class="order-div" id="drinksListQ">
                <p class="Q-title">
                Hot/Iced Blends
                    <span><button onclick="deleteRow(this)" data-name="Drinks" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="drinksQ" class="list-p-qty"></p>
            </div>
            <!-- smoothies -->
            <div class="order-div" id="smoothiesListQ">
                <p class="Q-title">
                    Smoothies
                    <span><button onclick="deleteRow(this)" data-name="Smoothies" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="smoothiesQ" class="list-p-qty"></p>
            </div>
            <!-- frappes -->
            <div class="order-div" id="frappesListQ">
                <p class="Q-title">
                    Frappes
                    <span><button onclick="deleteRow(this)" data-name="Frappes" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="frappesQ" class="list-p-qty"></p>
            </div>
            <!-- other drinks -->
            <div class="order-div" id="otherDrinksListQ">
                <p class="Q-title">
                    Other Drinks
                    <span><button onclick="deleteRow(this)" data-name="Other Drinks" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="otherDrinksQ" class="list-p-qty"></p>
            </div>
            <!-- flavored iced drinks -->
            <div class="order-div" id="flavoredDrinksListQ">
                <p class="Q-title">
                    Flavored Iced Drinks
                    <span><button onclick="deleteRow(this)" data-name="Flavored Drinks" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="flavoredDrinksQ" class="list-p-qty"></p>
            </div>
            <!-- starter -->
            <div class="order-div" id="starterListQ">
                <p class="Q-title">
                    Starter
                    <span><button onclick="deleteRow(this)" data-name="Starter" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="starterQ" class="list-p-qty"></p>
            </div>
            <!-- salad -->
            <div class="order-div" id="saladListQ">
                <p class="Q-title">
                    Salad
                    <span><button onclick="deleteRow(this)" data-name="Salad" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="saladQ" class="list-p-qty"></p>
            </div>
            <!-- burger -->
            <div class="order-div" id="burgerListQ">
                <p class="Q-title">
                    Burger
                    <span><button onclick="deleteRow(this)" data-name="Burger" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="burgerQ" class="list-p-qty"></p>
            </div>
            <!-- sandwich -->
            <div class="order-div" id="sandwichListQ">
                <p class="Q-title">
                    Sandwich
                    <span><button onclick="deleteRow(this)" data-name="Sandwich" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="sandwichQ" class="list-p-qty"></p>
            </div>
            <!-- pizza -->
            <div class="order-div" id="pizzaListQ">
                <p class="Q-title">
                    Pizza
                    <span><button onclick="deleteRow(this)" data-name="Pizza" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="pizzaQ" class="list-p-qty"></p>
            </div>
            <!-- all day breakfast -->
            <div class="order-div" id="allDayBListQ">
                <p class="Q-title">
                    All Day Breakfast
                    <span><button onclick="deleteRow(this)" data-name="All Day Breakfast" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="allDayBQ" class="list-p-qty"></p>
            </div>
            <!-- trashed -->
            <div class="order-div" id="soupListQ">
                <p class="Q-title">
                    Soup
                    <span><button onclick="deleteRow(this)" data-name="Soup" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="soupQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="spRiceListQ">
                <p class="Q-title">
                    Special Rice
                    <span><button onclick="deleteRow(this)" data-name="Special Rice" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="spRiceQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="beefListQ">
                <p class="Q-title">
                    Beef
                    <span><button onclick="deleteRow(this)" data-name="Beef" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="beefQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="seafoodListQ">
                <p class="Q-title">
                    Seafood
                    <span><button onclick="deleteRow(this)" data-name="Seafood" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="seafoodQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="chickenListQ">
                <p class="Q-title">
                    Chicken
                    <span><button onclick="deleteRow(this)" data-name="Chicken" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="chickenQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="porkListQ">
                <p class="Q-title">
                    Pork
                    <span><button onclick="deleteRow(this)" data-name="Pork" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="porkQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="vegesListQ">
                <p class="Q-title">
                    Vegetable
                    <span><button onclick="deleteRow(this)" data-name="Vegetable" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="vegesQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="dessertListQ">
                <p class="Q-title">
                    Dessert
                    <span><button onclick="deleteRow(this)" data-name="Dessert" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="dessertQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="pastaListQ">
                <p class="Q-title">
                    Pasta
                    <span><button onclick="deleteRow(this)" data-name="Pasta" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="pastaQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="breadListQ">
                <p class="Q-title">
                    Bread
                    <span><button onclick="deleteRow(this)" data-name="Bread" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="breadQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="noodlesListQ">
                <p class="Q-title">
                    Noodles
                    <span><button onclick="deleteRow(this)" data-name="Noodles" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="noodlesQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="bilaoListQ">
                <p class="Q-title">
                    Bilao
                    <span><button onclick="deleteRow(this)" data-name="Bilao" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="bilaoQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="groupMealListQ">
                <p class="Q-title">
                    Group Meal
                    <span><button onclick="deleteRow(this)" data-name="Group Meal" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="groupMealQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="snackPackageListQ">
                <p class="Q-title">
                    Snack Package
                    <span><button onclick="deleteRow(this)" data-name="Snack Package" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="snackPackageQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="beerPackageListQ">
                <p class="Q-title">
                    Beer Package
                    <span><button onclick="deleteRow(this)" data-name="Beer Package" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="beerPackageQ" class="list-p-qty"></p>
            </div>
            <div class="order-div" id="soloMealsListQ">
                <p class="Q-title">
                    Solo Meals
                    <span><button onclick="deleteRow(this)" data-name="Solo Meals" class="delete-key-list"><i class="fa-solid fa-trash-can"></i></button></span>
                </p>
                <p id="soloMealsQ" class="list-p-qty"></p>
            </div>
            <!-- end trashed -->
            <div class="done-btn-qty-container" id='doneBtnDiv'>
                <button type="button" data-key="done" class="">Done</button>
            </div>
        </div>
    </div>
<?php include 'includes-pages/footer.php'?>