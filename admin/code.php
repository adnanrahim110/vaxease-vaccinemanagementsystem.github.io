<?php

session_start();
include("../config/dbcon.php");
include("../functions/myfunctions.php");

if(isset($_POST['add_booking_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $booking_query = "INSERT INTO booking 
    (name,email,phone,date,message) 
    VALUES ('$name','$email','$phone','$date','$message')" ;

    $booking_query_run = mysqli_query($con, $booking_query);
    
    if($booking_query_run)
    {
        redirect("../index.php", "You Booked Your Seat Successfully");
    }
    else
    {
        redirect("../index.php", "Something Went Wrong");
    }
}
else if(isset($_POST['delete_booking_btn']))
{
    $booking_id = mysqli_real_escape_string($con, $_POST['booking_id']);

    $delete_query = "DELETE FROM booking WHERE id='$booking_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        redirect("bookings.php", "Booking deleted successfully");
    }
    else
    {
        redirect("bookings.php", "Something went wrong ");
    }
}
else if(isset($_POST['delete_hospital_btn']))
{
    $hospital_id = mysqli_real_escape_string($con, $_POST['hospital_id']);

    $delete_query = "DELETE FROM hospitals WHERE id='$hospital_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        redirect("hospital-list.php", "Hospital Removed successfully");
    }
    else
    {
        redirect("hospital-list.php", "Something went wrong ");
    }
}
else if(isset($_POST['add_vaccine_btn']))
{
    $vaccine_name = $_POST['vaccine_name'];
    $manufacturer = $_POST['manufacturer'];
    $vaccine_description = $_POST['vaccine_description'];
    $req_age_group = $_POST['req_age_group'];
    $dosage_shed = $_POST['dosage_shed'];
    $storage_req = $_POST['storage_req'];
    $side_effects = $_POST['side_effects'];

    $vaccine_image = $_FILES['vaccine_image']['name'];

    $path = "../uploads";

    $vaccine_image_ext = pathinfo($vaccine_image, PATHINFO_EXTENSION);
    $vaccine_filename = time().'.'.$vaccine_image_ext;

    $vaccine_query = "INSERT INTO vaccine 
    (vaccine_name,manufacturer,vaccine_description,req_age_group,dosage_shed,storage_req,side_effects,vaccine_image) 
    VALUES ('$vaccine_name','$manufacturer','$vaccines_description','$req_age_group','$dosage_shed','$storage_req','$side_effects','$vaccine_filename')" ;

    $vaccine_query_run = mysqli_query($con, $vaccine_query);
    
    if($vaccine_query_run)
    {
        move_uploaded_file($_FILES['vaccine_image']['tmp_name'], $path.'/'.$vaccine_filename);
        redirect("add-vaccine.php", "Vaccine Added Successfully");
    }
    else
    {
        redirect("add-vaccine.php", "Something Went Wrong");
    }
}
if(isset($_POST['delete_vaccine_btn']))
{
    $vaccine_id = mysqli_real_escape_string($con, $_POST['vaccine_id']);

    $delete_query = "DELETE FROM vaccine WHERE id='$vaccine_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        redirect("hospital-list.php?#vaccine", "vaccine Removed successfully");
    }
    else
    {
        redirect("hospital-list.php?#vaccine", "Something went wrong ");
    }
}

?>