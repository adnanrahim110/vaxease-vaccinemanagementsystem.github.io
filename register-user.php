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
            
            <article class="card1 card-body mx-auto col-5">
                <h4 class="card-title text-center text-uppercase fs-2">Register</h4>
                <p class="text-center">Register yourself</p>
                <p class="divider-text">
                    <span><></span>
                </p>
                <form action="functions/authcode.php" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input type="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="Enter Your Email" class="form-control" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <input type="telephone" name="phone" class="form-control" placeholder="Phone: +92-1234567890" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="bi bi-lock-fill"></i></span>
                        </div>
                        <input name="password" class="form-control" placeholder="Enter your password" type="password">
                    </div>                                     
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="bi bi-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Confirm your password" type="password">
                    </div>                                     
                    <div class="form-group">
                        <button type="submit" id="submit-button" class="btn btn-primary btn-block" name="register_btn">Register</button>
                    </div>     
                    <p class="text-center">Already have an account? <a href="login-as.php">Login</a> </p>                                                                 
                </form>
            </article>
        </div>

    </div>
<?php include('includes/login-includes/footer.php'); ?>