<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" 
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Login/Register</title>

    <style>
        .site-footer {
            padding: 20px;
            background: #F9F9F9;
        }

        .copyright-text {
            font-size: 16px;
        }

        .social-icon {
            margin: 0;
            padding: 0;
        }

        .social-icon li {
            list-style: none;
            display: inline-block;
            vertical-align: top;
            transition: all 0.3s;
        }

        .social-icon:hover li:not(:hover) {
            opacity: 0.65;
        }

        .social-icon-link {
            font-size: 18px;
            display: inline-block;
            vertical-align: top;
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 15px;
        }

        .social-icon-link:hover {
            color: #247cff;
        }
        .login_form {
            margin-bottom: 100px;
        }
        .card1 {
            background-color: #ddd;
        }
        hr {
            max-width: 380px;
        }
        .card-body {
            color: #000;
            padding: 2rem;
            border-radius: 1px;
        }
        .divider-text {
            position: relative;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .divider-text span {
            color: #000;
            background-color: #ddd;
            padding: 7px;
            font-size: 12px;
            position: relative;   
            z-index: 2;
        }
        .divider-text:after {
            content: "";
            position: absolute;
            width: 100%;
            border-bottom: 1px solid #000;
            top: 55%;
            left: 0;
            z-index: 1;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand bg-light rounded-2" href="index.php">
                <img width="100px" src="assets/images/logo2.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="register.php">Register</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>