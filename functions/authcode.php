<?php
session_start();
include('../config/dbcon.php');
include('myfunctions.php');

if(isset($_POST['register_btn']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);


    $check_email_query = "SELECT email FROM users WHERE email='$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['message'] = "Email already registered";
        header('location: ../register.php');
    }
    else
    {
        if($password == $cpassword)
        {
            $insert_query = "INSERT INTO users (`name`,`email`,`phone`,`password`) VALUES ('$name', '$email', '$phone', '$password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run)
            {
                $_SESSION['message'] = "Registered Successfully";
                header('location: ../login.php');
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong";
                header('location: ../register.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Password do not match";
            header('location: ../register.php');
        }
    }
}
else if(isset($_POST['add_hospital_btn']))
{
    $hosp_name = mysqli_real_escape_string($con,$_POST['hosp_name']);
    $hosp_email = mysqli_real_escape_string($con,$_POST['hosp_email']);
    $hosp_pass = mysqli_real_escape_string($con,$_POST['hosp_pass']);
    $hosp_cpass = mysqli_real_escape_string($con,$_POST['hosp_cpass']);
    $hosp_url = mysqli_real_escape_string($con,$_POST['hosp_url']);
    $hosp_phone = mysqli_real_escape_string($con,$_POST['hosp_phone']);
    $hosp_address = mysqli_real_escape_string($con,$_POST['hosp_address']);
    $type = mysqli_real_escape_string($con,$_POST['type']);
    $availability = mysqli_real_escape_string($con,$_POST['availability']);
    $num_of_bed = mysqli_real_escape_string($con,$_POST['num_of_bed']);

    $hosp_logo = $_FILES['hosp_logo']['name'];

    $hosp_path = "../uploads";

    $hosp_logo_ext = pathinfo($hosp_logo,PATHINFO_EXTENSION);
    $hosp_filename = time().'.'.$hosp_logo_ext;

    $check_hosp_email_query = "SELECT hosp_email FROM hospitals WHERE hosp_email='$hosp_email' ";
    $check_hosp_email_query_run = mysqli_query($con, $check_hosp_email_query);

    if(mysqli_num_rows($check_hosp_email_query_run) > 0)
    {
        $_SESSION['message'] = "Email already registered";
        header('location: ../add-hospital.php');
    }
    else
    {
        if($hosp_pass == $hosp_cpass)
        {
            $hosp_query = "INSERT INTO hospitals 
            (`hosp_name`,`hosp_email`,`hosp_pass`,`hosp_website`,`hosp_phone`,`hosp_address`,`type`,`availability`,`num_of_bed`,`hosp_logo`) 
            VALUES ('$hosp_name','$hosp_email','$hosp_pass','$hosp_url','$hosp_phone','$hosp_address','$type','$availability','$num_of_bed','$hosp_filename')" ;
            $hosp_query_run = mysqli_query($con, $hosp_query);

            if($hosp_query_run)
            {
                
                move_uploaded_file($_FILES['hosp_logo']['tmp_name'], $hosp_path.'/'.$hosp_filename);
                $_SESSION['message'] = "Your Hospital Registered Successfully";
                header('location: ../hospital-login.php');
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong";
                header('location: ../add-hospital.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Password do not match";
            header('location: ../add-hospital.php');
        }
    }
}
else if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['role_as'] = $role_as;

        if($role_as == 1)
        {
            redirect("../admin/admin-panel.php", "Welcome to Dashboard");
        }
        else
        {
            redirect("../index.php", "Logged in successfully");
        }
        
    }
    else
    {
        redirect("../login.php", "Invalid Credentials");
    }
}
else if(isset($_POST['hosp_login_btn']))
{
    $hosp_email = mysqli_real_escape_string($con, $_POST['hosp_email']);
    $hosp_pass = mysqli_real_escape_string($con, $_POST['hosp_pass']);

    $hosp_login_query = "SELECT * FROM hospitals WHERE hosp_email='$hosp_email' AND hosp_pass='$hosp_pass'";
    $hosp_login_query_run = mysqli_query($con, $hosp_login_query);

    if(mysqli_num_rows($hosp_login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($hosp_login_query_run);
        $hosp_username = $hosp_userdata['hosp_name'];
        $hosp_useremail = $hosp_userdata['hosp_email'];

        $_SESSION['auth_user'] = [
            'hosp_name' => $hosp_username,
            'hosp_email' => $hosp_useremail
        ];

        $_SESSION['message'] = "Logged In successfully";
        header("location: ../hospital-dashboard/hospital-admin-panel.php");
    }
    else
    {
        redirect("../hospital-login.php", "Invalid Credentials");
    }
}

?>