<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>vaxEase : Vaccine Management System</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/owl.carousel.min.css" rel="stylesheet">

        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="assets/css/vaxease.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" 
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

        <script src="assets/js/fontawesome.js" crossorigin="anonymous"></script>

        <!------------ some other links  -------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
        <!------------ some other links  -------------->

    </head>
    
    <body id="top">
    
        <main>
            <?php include('navbar.php'); ?>
            
            <!-- Header Section -->
            <section class="hero" id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        <?php 
                        if(isset($_SESSION['message']))
                        {
                            ?>
                            <center>
                                <div style="max-width: 400px; margin-top: 20px" class="text-center alert alert-warning alert-dismissable fade show" role="alert">
                                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </center>
                            <?php
                            unset($_SESSION['message']);
                            
                        }
                        ?>
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="assets/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">
                                <h1 class="mt-auto mb-2">
                                    Better
                                    <div class="animated-info">
                                        <span class="animated-item">health</span>
                                        <span class="animated-item">days</span>
                                        <span class="animated-item">lives</span>
                                    </div>
                                </h1>
                                <p class="mb-4">Welcome to VaxEase, your all-in-one vaccine booking system website. 
                                    We understand the importance of vaccination in safeguarding your health and well-being.
                                    With VaxEase, we bring you a seamless and convenient way to schedule your vaccination appointments</p>
                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="#about" data-hover="Learn More">Learn More</a>
                                    <p class="contact-phone mb-0"><i class="bi-telephone-fill"></i> 010-020-0340</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">Meet Dr. Carson</h2>
                            <p>"As a dedicated healthcare professional, I wholeheartedly recommend VaxEase, the ultimate vaccine booking system website. 
                            This innovative platform has revolutionized the way we schedule vaccination appointments, 
                            making it incredibly convenient for individuals to protect their health. With VaxEase, 
                            you can effortlessly browse available vaccination centers, check real-time appointment availability, 
                            and secure your slots with ease. This user-friendly website eliminates the hassle and frustration often associated with vaccine bookings, 
                            ensuring a smooth and efficient experience for all. 
                            Don't miss out on the opportunity to prioritize your health and the health of your loved ones."</p>
                            <p>Visit <a href="#hero">VaxEase</a> today and take the first step towards a safer future.</p>
                        </div>
                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">VE</span> Vaccination Appointments<br> at Your Fingertips</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Gallery Section -->
            <section class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-6 ps-0">
                            <img src="assets/images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                        </div>
                        <div class="col-lg-6 col-6 pe-0">
                            <img src="assets/images/gallery/female-doctor-with-presenting-hand-gesture.jpg" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team Section -->
            <section class="section-team" id="team">
                <div class="container">
                    <!-- Start Header Section -->
                    <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="header-section">
                                <h2 class="title">About Us</h2>
                            </div>
                        </div>
                    </div>
                    <!-- / End Header Section -->
                    <div class="row">
                        <!-- Start Single Person -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="single-person">
                                <div class="person-image">
                                    <img src="assets/images/teampics/adnan.jpg" alt="adnan" title="Adnan Rahim">
                                    <span class="icon">
                                        <a target="_blank" href="https://www.linkedin.com/in/adnan-rahim-4b94a5240/"><i class="fab  fa-linkedin-in"></i></a>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name">
                                    <h3 class="full-name">ADNAN RAHIM</h3>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                        <!-- Start Single Person -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="single-person">
                                <div class="person-image">
                                    <img src="assets/images/teampics/akbar.jpg" alt="akbar" title="Akbar Ali">
                                    <span class="icon">
                                        <a target="_blank" href="https://www.linkedin.com/in/akber-ali-428946227/"><i class="fab  fa-linkedin-in"></i></a>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name">AKBAR ALI</h3>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                        <!-- Start Single Person -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="single-person">
                                <div class="person-image">
                                    <img src="https://i.ibb.co/25zdRMr/person3.jpg" alt="">
                                    <span class="icon">
                                        <a target="_blank" href=""><i class="fab  fa-linkedin-in"></i></a>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name">SHAWN ETHEN</h3>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                        <!-- Start Single Person -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="single-person">
                                <div class="person-image">
                                    <img src="https://i.ibb.co/w0ynr2Q/person4.jpg" alt="">
                                    <span class="icon">
                                    <a target="_blank" href=""><i class="fab  fa-linkedin-in"></i></a>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name">John Smith</h3>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                    </div>
                </div>
            </section>

            <!-- Booking Section -->
             <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                            
                                <form action="admin/code.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="telephone" name="phone" id="phone"  class="form-control" placeholder="Phone: +92-1234567890">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="date" name="date" id="date" value="" class="form-control">
                                            
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" name="add_booking_btn" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>