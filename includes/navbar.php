    <?php session_start(); ?>
    
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand mx-auto d-lg-none" href="index.php">
                vaxEase
                <strong class="d-block">vaccine booking system</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#header">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#team">Our Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <a class="navbar-brand d-none d-lg-block" href="index.html">
                        <img width="100px" src="assets/images/logo2.png" alt="">
                        <strong class="d-block">Vaccine booking System</strong>
                    </a>

                    <li class="nav-item">
                        <a class="nav-link" href="#booking">Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php
                        if(isset($_SESSION['auth']))
                        {
                            ?>
                            <style>
                                /* Drop Down */
                                .navbar_dropdown {
                                position: relative;
                                }

                                .dropdown-btn {
                                background-color: #F9F9F9;
                                color: #717275;
                                font-weight: 600;
                                border: none;
                                padding-top: 15px;
                                padding-bottom: 15px;
                                cursor: pointer;
                                }

                                .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #f9f9f9;
                                min-width: 200px;
                                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                z-index: 1;
                                }

                                .dropdown-content a {
                                color: #000;
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;
                                }

                                .dropdown-content a:hover {
                                background-color: #ddd;
                                }

                                .dropdown-btn.active + .dropdown-content {
                                display: block;
                                }
                            </style>
                            <div class="navbar_dropdown">
                                <button class="dropdown-btn"><?= $_SESSION['auth_user']['name']; ?></button>
                                <div class="dropdown-content">
                                    <a href="child-form.php">Add Child Info</a>
                                    <a href="logout.php">Logout</a>
                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const dropdownBtn = document.querySelector(".dropdown-btn");
                                    
                                    dropdownBtn.addEventListener("click", function() {
                                        this.classList.toggle("active");
                                    });
                                });
                            </script>
                            <?php 
                        }
                        else
                        {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login-as.php">Login</a>
                            </li>
                            <?php 
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>