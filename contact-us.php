<?php include 'includes/main-header.php'?>
<?php include 'includes/contact-code.php'?>


<section class="contact-banner-section">
    <div class="contact-banner-overlay"></div>
    <div class="container-fluid contact-banner-container">
        <div class="contact-name">
            <div class="contact-title-div">
                <h2 class="contact-title">Contact Us</h2>
                <hr class="contact-banner-hr">
            </div>
        </div>
    </div>
</section>

<section class="contact-body">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form class="contact-form-page needs-validation" method="POST" action="contact-us.php" autocomplete="off" novalidate> 
                    <div class="contact-review-title">
                        <h3 style="font-weight: 400">Share Your Experience</h3>
                        <hr class="get-touch-hr">
                    </div>
                    <div class="inpt-box">
                        <label for="contactFname" class="contact-label">Name</label>
                        <input type="text" class="form-control to-upper" id="contactFname" name="name" autofocus required>
                        <div class="invalid-feedback">
                            *Please provide name.
                        </div>
                    </div>
                    <div class="inpt-box">
                        <label for="contactEmail" class="contact-label">Email</label>
                        <input type="email" class="form-control" id="contactEmail" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>
                        <div class="invalid-feedback">
                            *Please provide a valid email.
                        </div>
                    </div>
                    <div class="inpt-box">
                        <label for="contactSubject" class="contact-label">Subject</label>
                        <input type="text" class="form-control to-upper" id="contactSubject" name="subject" required>
                        <div class="invalid-feedback">
                            *Please provide subject.
                        </div>
                    </div>
                    <div class="inpt-box">
                        <label for="contactMessage" class="contact-label">Your Message</label>
                        <textarea class="form-control to-upper" id="contactMessage" name="message" rows="10" required></textarea>
                    </div>
                    <div class="inpt-button">
                        <button type="submit" name="send" class="btn btn-primary contact-submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="get-in-touch-div">
                    <h3 class="get-touch-title">Get in Touch</h3>
                    <hr class="get-touch-hr">
                    <p class="get-touch-p">Want to stay in our hotel? Contact us through the following details:</p>
                </div>
                <div class="contact-details-div">
                    <h3 class="cotact-details-title">Contact Details</h3>
                    <hr class="contact-details-hr">
                    <div class="contact-details-location">
                        <i class="fa-solid fa-location-dot"></i><span class="contact-location-txt">G/F ARDCI Corporate Building 2, San Roque, Virac, Catanduanes</span>
                    </div>
                    <div class="contact-details-number">
                        <i class="fa-solid fa-phone-flip"></i><span class="contact-number-txt">(+63)998-988-2476 (Reservation) </span>
                    </div>
                    <div class="contact-details-number">
                        <i class="fa-solid fa-phone-flip"></i><span class="contact-number-txt">(+63)969-025-9365 (Food and Beverage) </span>
                    </div>
                    <div class="contact-details-number">
                        <i class="fa-solid fa-phone-flip"></i><span class="contact-number-txt">(+63)981-027-0958 (Gym) </span>
                    </div>
                    <div class="contact-details-number">
                        <i class="fa-solid fa-phone-flip"></i><span class="contact-number-txt">(+63)981-027-0966 (Caf&eacute;) </span>
                    </div>
                    <div class="contact-details-email">
                        <i class="fa-solid fa-envelope"></i><span class="contact-email-text"><a href="mailto:ardciinnvirac@yahoo.com">ardciinnvirac@yahoo.com</a></span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="contact-maps">
                    <iframe width="100%" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=ardci%20corporate%20inn&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- include modal -->
<?php include 'includes/modal.php'?>
<?php include 'includes/footer.php'?>