<?php
    session_start();
    include('includes/login-includes/header.php'); 
    
    if(isset($_SESSION['auth']))
    {
        $_SESSION['message'] = "You are already logged In";
        header('location: index.php');
        exit();
    }

?>

<div class="login_form container">
        <center><hr></center>
        <div class="card" style="border: none;">
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
            
            <article class="card1 card-body mx-auto">
                <h4 class="card-title mt-3 text-center">Login</h4>
                <p class="text-center">Get into your account</p>
                <p class="divider-text">
                    <span><></span>
                </p>
                <form action="functions/authcode.php" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email">
                    </div> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Enter your password" type="password">
                    </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" name="login_btn" class="btn btn-primary btn-block">Login</button>
                    </div> <!-- form-group// -->      
                    <p class="text-center">Don't have an account? <a href="register-as.php">Register</a> </p>                                                                 
                </form>
            </article>
        </div>

    </div>
<?php include('includes/login-includes/footer.php'); ?>