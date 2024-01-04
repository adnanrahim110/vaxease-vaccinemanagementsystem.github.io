<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your Hospital</title>

    <link rel="stylesheet" href="admin/assets/css/material-dashboard.min.css">
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&family=Poppins:wght@400;500;600;700;800;900&family=Roboto+Mono:wght@400;500;600;700&display=swap');


        #navbar {
            background: #9AC5F4;
            font-family: 'Belanosima', sans-serif;
        }
        .navbar .navbar-brand {
            font-size: 1.7rem;
        }
        .navbar .navbar-brand img {
            width: 100px;
        }
        .navbar-nav a{
            color: var(--clr);
            font-size: 1.2rem;
        }
        .hospital-form label {
            font-weight: 700;
            margin-top: 10px;
        }
        .hospital-form .form-control {
            background: transparent;
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #eaeaea;
            color: #6c757d;
            font-weight: 400;
            padding-top: 3px;
            margin-top: 5px;
            transition: all 0.3s;
        }

        .hospital-form #submit-button {
            background: #000000;
            border-bottom: none;
            font-weight: 600;
            color: #FFFFFF;
            text-transform: uppercase;
            margin-top: 35px;
        }

        .hospital-form #submit-button:hover {
            background: #e91e63;
        }
    </style>
 
 </head>
 <body>
    <nav id="navbar" class="navbar navbar-expand-lg shadow px-3 mb-3">
        <a class="navbar-brand text-light" href="website.php"><img src="assets/images/logo2.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="bg-light py-2 rounded-2 navbar-nav px-2 ms-auto">
                <li class="nav-item">
                    <a class="text-dark px-2" style="--clr:#fff" href="#add_hospital">Add Your hospital</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container py-4">
        <?php 
            if(isset($_SESSION['message']))
            {
                ?>
                <center>
                    <div style="max-width: 400px;" class="text-center alert alert-warning alert-dismissable fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </center>
                <?php
                unset($_SESSION['message']);
                
            }
        ?>
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h4 class="text-white text-capitalize ps-3 mx-8">Register Your Hospital</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 mx-auto pt-4 pb-2">
                        <div class="hospital-form p-3 pt-0">
                            <form action="functions/authcode.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12 p-1">
                                        <label for="">Hospital Name</label>
                                        <input type="text" name="hosp_name" placeholder="Enter Hospitals Name" class="form-control" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Hospital Email</label>
                                        <input type="email" name="hosp_email" pattern="[^ @]*@[^ @]*" placeholder="Enter Hospital's Email" class="form-control" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Password</label>
                                        <input type="password" name="hosp_pass" placeholder="Enter Password" class="form-control" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="hosp_cpass" placeholder="Confirm Password" class="form-control" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Hospital URL</label>
                                        <input rows="3" name="hosp_url" placeholder="Enter Hospital's URL" class="form-control" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Hospital TelePhone</label>
                                        <input type="telephone" name="hosp_phone" class="form-control" placeholder="Phone: +92-1234567890" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Hospital Address</label>
                                        <textarea rows="2" type="text" name="hosp_address" placeholder="Enter Hospital's Address" class="form-control" required></textarea>
                                    </div>
                                    <div class="col-md-12 p-1">
                                        <label for="">Type of Hospital</label>
                                        <select class="form-control" name="type" required>
                                            <option disabled selected>Select</option>
                                            <option value="Private">Private</option>
                                            <option value="Government">Government</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 p-1">
                                        <label for="">Availability of 24/7 Care</label>
                                        <select class="form-control" name="availability" required>
                                            <option disabled selected>Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Number Of Beds</label>
                                        <input type="Number" name="num_of_bed" class="form-control" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="">Upload Image</label>
                                        <input type="file" name="hosp_logo" class="form-control" required>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" id="submit-button" class="form-control pt-2" name="add_hospital_btn">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </body>
</html>