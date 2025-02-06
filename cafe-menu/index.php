<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>ARDCI Café</title>

        <!-- tab icon -->
        <link rel="icon" href="image/cafe-logo.png">

        <!-- css -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- font awesome -->
        <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
    </head>
    <body>
        <div class="menu-categories-body">
            <div class="cafe-bbg"></div>
            <div class="cafe-index-container">
                <div class="cafe-index-header">
                    <div class="cafe-haeder-bg">
                        <img src="image/header-bgtr-white.png" class="img-fluid d-block mx-auto header-bg-img-white" alt="header-bg">
                        <img src="image/header-bgtr.png" class="img-fluid d-block mx-auto header-bg-img-colored" alt="header-bg">

                        <div class="cafe-header-title-container">
                            <h1 class="cafe-head-title">ARDCI<br> <span class="cafe-title-span">Café</span></h1>
                        </div>
                    </div>
                    <!-- order list -->
                    <div class="order-list-con" id="orderListTop">
                        <a href="pages/listed-order.php" class="order-list-icon-a">
                            <i class="fa-solid fa-clipboard-list"></i><span id="order-list-count">0</span>
                        </a>
                    </div>
                    <div class="cafe-body-list-container">
                        <div class="row">
                            <!-- hot blends -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/hot-iced-blends.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/coffe.png" class="img-fluid d-block mx-auto" alt="coffee"></div>
                                        <div class="cafe-item-name"><h3 class="hot-blends-t">Hot/Iced Blends</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Awaken your senses with ARDCI Café's caffeine-infused hot and iced blends.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- smoothie -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/smoothies.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/mango-smoothie.png" class="img-fluid d-block mx-auto cafe-mango-smoothies" alt="smoothies"></div>
                                        <div class="cafe-item-name"><h3 class="cafe-smoothiies-t">Smoothies</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Revitalize your day with ARDCI Café's fresh and all-natural smoothies.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- frappes -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/frappes.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/frappes.png" class="img-fluid d-block mx-auto cafe-frappes" alt="frappes"></div>
                                        <div class="cafe-item-name"><h3 class="cafe-frappes-t">Frappes</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Bring out your inner child with the flavors of ARDCI Café Frappes.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- other drinks -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/other-drinks.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/lemonade.png" class="img-fluid d-block mx-auto cafe-otDrinks" alt="other drinks"></div>
                                        <div class="cafe-item-name"><h3 class="cafe-otDrinks-t">Other Drinks</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Parched but in a hurry? Grab in-cans of our selection of sodas and cold teas.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- flavored drinks -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/flavored-iced-drinks.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/cucumber.png" class="img-fluid d-block mx-auto cafe-flavoredD" alt="flavored drinks"></div>
                                        <div class="cafe-item-name"><h3 class="cafe-flavoredD-t">Flavored <br> Iced Drinks</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Quench your thirst with our wide selection of flavored iced drinks.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- starter -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/starter.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/fries.png" class="img-fluid d-block mx-auto cafe-starter" alt="starter"></div>
                                        <div class="cafe-item-name"><h3 class="starter-t">Starters</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Indulge in the savory flavors of our starters to fire up your appetite.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- salad -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/salad.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/salad.png" class="img-fluid d-block mx-auto cafe-salad" alt="salad"></div>
                                        <div class="cafe-item-name"><h3 class="salad-t">Salads</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Stay in shape and delight in our delectable variety of salads.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- pasta -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/pasta.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/pasta-m.png" class="img-fluid d-block mx-auto cafe-pasta" alt="burger"></div>
                                        <div class="cafe-item-name"><h3 class="salad-t">Pasta</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Savory and satisfying pasta dishes perfect for any occasion.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- burger -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/burger.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/burger.png" class="img-fluid d-block mx-auto cafe-burger" alt="burger"></div>
                                        <div class="cafe-item-name"><h3 class="salad-t">Burgers</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Satisfy your big appetite with a generous serving of our special burger buns and patties.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- sandwich -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/sandwich.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/sandwich.png" class="img-fluid d-block mx-auto cafe-sandwich" alt="burger"></div>
                                        <div class="cafe-item-name"><h3 class="sandwich-t">Sandwiches</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Sink your teeth into layers and layers of fresh ingredients of our succulent sandwich.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- pizza -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/pizza.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/pizza.png" class="img-fluid d-block mx-auto cafe-pizza" alt="burger"></div>
                                        <div class="cafe-item-name"><h3 class="pizza-t">Pizzas</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Go all-out whether celebrating or just craving and enjoy every slice of our pizza picks.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- all day breakfast -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/all-day-breakfast.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/tapsilog.png" class="img-fluid d-block mx-auto cafe-allDay" alt="burger"></div>
                                        <div class="cafe-item-name"><h3 class="allDay-t">All-Day Breakfast</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Start your day with our selection of filling silog meals.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- dessert -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/dessert.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/fruit-salad.png" class="img-fluid d-block mx-auto cafe-dessert" alt="dessert"></div>
                                        <div class="cafe-item-name"><h3 class="dessert-t">Desserts</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Irresistible desserts crafted to provide a perfect, sweet finish to your dinning experience.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- Solo meals -->
                            <div class="col-6 cafe-mb-item">
                                <a href="pages/solo-meals.php" class="cafe-link">
                                    <div class="cafe-item-cont">
                                        <div class="cafe-item-image"><img src="image/solo-meal.png" class="img-fluid d-block mx-auto cafe-solo-meal" alt="solo-meal"></div>
                                        <div class="cafe-item-name"><h3 class="solo-meal-t">Solo Meals</h3></div>
                                    </div>
                                    <div class="cafe-item-desc">
                                        <p>Solo plates each served with rice, buttered veggies, iced tea.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cafe-footer">
                        <img src="image/header-bgtr-white1.png" alt="footer image" class="footer-img img-fluid">
                        <p class="footer-p"> ARDCI Café &copy; <span id="yearF"></span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- js -->
        <!-- jquery cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- bootstrap -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>