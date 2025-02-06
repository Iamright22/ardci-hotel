<?php include 'includes/main-header.php'?>
<?php include 'includes/banner.php'?>

<!-- welcome section -->
<section class="welcome-page">
    <div class="container">
        <div class="welcome-header-div">
            <h2 class="welcome-title">Welcome To ARDCI Hotel</h2>
        </div>
        <div class="line-div"><hr class="header-line"></div>
        <div class="welcome-content-div">
            <p class="welcome-p">
                Experience modern comfort and convenience, and indulge in exceptional food and hospitality services right at the heart of Catanduanes! Envisioned to cater to travellers and local guests alike, ARDCI Hotel is the perfect place that allows for comfort and leisure.
            </p>
        </div>
    </div>
</section>

<!-- about us main section -->
<section class="about-us-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <div class="about-us-main-content-container">
                    <div class="about-us-main-header-div">
                        <h2 class="about-us-main-title">About Us</h2>
                    </div>
                    <div class="about-line-div"><hr class="about-main-line"></div>
                    <div class="about-us-main-content-div">
                        <p class="about-us-main-p">
                            ARDCI Hotel, a subsidiary of ARDCI MFI, has since become one of the powerhouses in hospitality, food services, and function spaces in the province of Catanduanes.
                        </p>
                        <a href="about-us.php" id="console" class="about-us-main-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2  p-0 about-us-img-container">
                <div class="about-us-main-img-overlay"></div>
                <div class="about-us-main-img"></div>
            </div>
        </div>
    </div>
</section>

<!-- Our Rooms section -->
<section class="our-rooms-main">
    <div class="container">
        <div class="our-rooms-main-header-div">
            <h2 class="our-rooms-main-title">
                Our Services
            </h2>
            <div class="our-rooms-main-line-div"><hr class="our-rooms-main-line"></div>
            <div class="our-rooms-desc-div">
                <p class="our-rooms-desc">
                Our hotel's 34 guest rooms comes with WiFi access, flat screen cable TV, and refreshments.
                </p>
            </div>
        </div>
        <div class="row g4 my-5 index-carousel owl-carousel owl-theme cnter-991">
            <!-- room1 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/king-1-view.jpg" loading="lazy" alt="room1" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">King Suite</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">2 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 King Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 2</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciKingModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room2 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/queen-1-view.jpg" loading="lazy" alt="room1" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Queen Suite</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">4 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">2 Queen Beds</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 2</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciQueenModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room3 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/triple-suite3-view.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Triple Suite</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">3 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 Single and 1 Queen Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 2</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciTripleModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room4 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/superior-4.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Superior Suite</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">2 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 Queen Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 2</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciSuperiorModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room5 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/executive-a-12.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Executive A</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">3 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 Single and 1 Double Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Hotel Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciExaModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room6 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/executive-b-c.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Executive B&C</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">2 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 Queen Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciExbModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room7 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/deluxeA-3-view.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Deluxe A</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">3 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 Double Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciDeluxeAModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room8 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/deluxe-b.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Deluxe B</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">2 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">2 Single Beds</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciDeluxeBModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room9 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/standardDel-1.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Standard Deluxe</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">2 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">2 Single Beds</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciSDeluxeModal" class="room-main-btn">Details</a>
                    </div>
                </div> 
            </div>
            <!-- room10 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/economy-single.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Economy Single</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">1 Person</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 Single Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciEconSingleModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room11 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/econ-double-1.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Economy Double</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">2 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">1 Double-Decker Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciEconDoubleModal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room12 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/econ1-3.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Economy 1</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">8 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">4 Double-Decker Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciEcon1Modal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
            <!-- room13 -->
            <div class="col room-card item">
                <div class="room-img">
                    <img src="assets/image/econ2-1.jpg" alt="room1" loading="lazy" class="img-fluid d-block mx-auto">
                </div>
                <div class="room-main-body">
                    <div class="room-title">
                        <span class="room-main-available-span">Available rooms</span>
                        <h4 class="room-main-title"><a href="#" class="room-main-title-a d-block text-dark text-decoration-none py-2">Economy 2</a></h4>
                    </div>
                    <div class="room-details">
                        <div class="capacity-main">
                            <i class="fa-solid fa-user rm-main-fa-fa"></i> <span class="capacity-span">Capacity:</span> <span class="capacity-p">10 Persons</span>
                        </div>
                        <div class="size-main">
                            <i class="fa-solid fa-bed rm-main-fa-fa"></i> <span class="capacity-span">Type of bed:</span> <span class="capacity-p">5 Double-Decker Bed</span>
                        </div>
                        <div class="view-main">
                            <i class="fa-solid fa-location-dot rm-main-fa-fa"></i> <span class="capacity-span">Location:</span> <span class="capacity-p">ARDCI Corporate Building 1</span>
                        </div>
                    </div>
                    <div class="room-main-btn-div">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#faciEcon2Modal" class="room-main-btn">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- hotel facilities -->
<section class="hotel-facilities">
    <div class="container">
        <div class="facilitiies-main-header-div text-center">
            <h2 class="facilities-title">
                Hotel Facilities
            </h2>
            <div class="our-rooms-main-line-div"><hr class="our-rooms-main-line"></div>
        </div>
        <div class="facilities-container row">
            <!--Function Spaces-->
            <div class="faci-sub-container col-md-6">
                <div class="faci-sub-header d-flex">
                    <!-- <i class="fa-solid fa-mug-hot facilities-sub-icon"></i> -->
                    <i class="fa-solid fa-building facilities-sub-icon"></i>
                    <h4 class="facilities-sub-title">Function Spaces</h4>
                </div>
                <div class="faci-body-desc">
                    <p class="faci-desc faci-p-right-25">
                        Find the perfect venue for your most celebrated moments! Create memories at our Function Halls, Music Lounges, Sky Deck, and Cabana.
                    </p>
                </div>
            </div>
            <!--Dining-->
            <div class="faci-sub-container col-md-6">
                <div class="faci-sub-header d-flex">
                    <i class="fa-solid fa-plate-wheat facilities-sub-icon faci-icon-margin-left"></i>
                    <h4 class="facilities-sub-title">Dining</h4>
                </div>
                <div class="faci-body-desc">
                    <p class="faci-desc faci-p-left-25">
                        Indulge in delectable cuisines and rich flavours that are remarkably Catandunganon at ARDCI Cafe and Eve's Blends and Spices.
                    </p>
                </div>
            </div>
            <!--Wellness Center-->
            <div class="faci-sub-container col-md-6">
                <div class="faci-sub-header d-flex resto-music-div">
                    <i class="fa-solid fa-heart-pulse facilities-sub-icon"></i>
                    <h4 class="facilities-sub-title">Wellness Center</h4>
                </div>
                <div class="faci-body-desc">
                    <p class="faci-desc faci-p-right-25">
                        Restore your fitness and regain inner balance with our Sky Gym, Outdoor Pool, Massage and Sauna services.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- include modal -->
<?php include 'includes/modal.php'?>

<?php include 'includes/footer.php'?>