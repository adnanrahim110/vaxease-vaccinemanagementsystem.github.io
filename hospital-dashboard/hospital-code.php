<?php

session_start();
include("../config/dbcon.php");
include("../functions/myfunctions.php");



if(isset($_POST['add_vaccine_btn']))
{
    $vaccine_name = $_POST['vaccine_name'];
    $manufacturer = $_POST['manufacturer'];
    $vaccine_description = $_POST['vaccine_description'];
    $req_age_group = $_POST['req_age_group'];
    $dosage_shed = $_POST['dosage_shed'];
    $storage_req = $_POST['storage_req'];
    $side_effects = $_POST['side_effects'];

    $vaccine_image = $_FILES['vaccine_image']['name'];

    $path = "../vaccines";

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

else if(isset($_POST['update_vaccine_btn']))
{
    $availability = isset($_POST['availability']) ? '1':'0' ;

    $update_query = "UPDATE vaccine SET availability='$availability' ";

    $update_query_run = mysqli_query($con, $update_query);

    if($update_query_run)
    {
        redirect("edit-vaccine.php?id=$vaccine_id", "Vaccine Updated Successfully");
    }
    else
    {
        redirect("edit-vaccine.php?id=$vaccine_id", "Something Went Wrong");
    }
}
?>