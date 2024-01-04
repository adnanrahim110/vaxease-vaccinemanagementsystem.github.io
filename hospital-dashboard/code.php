<?php

session_start();
include("../config/dbcon.php");
include("../functions/myfunctions.php");

if(isset($_POST['add_category_btn']))
{

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1':'0' ;
    $popular = isset($_POST['popular']) ? '1':'0' ;

    $image = $_FILES['image']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $cate_query = "INSERT INTO categories 
    (name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image) 
    VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status','$popular','$filename')" ;

    $cate_query_run = mysqli_query($con, $cate_query);
    
    if($cate_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        redirect("add-category.php", "Category Added Successfully");
    }
    else
    {
        redirect("add-category.php", "Something Went Wrong");
    }

}
else if(isset($_POST['update_category_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1':'0' ;
    $popular = isset($_POST['popular']) ? '1':'0' ;

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }

    $path = "../uploads";

    $update_query = "UPDATE categories SET name='$name', slug='$slug', description='$description', 
    meta_title='$meta_title', meta_description='$meta_description', meta_keywords='$meta_keywords',
    status='$status', popular='$popular' WHERE id='$category_id' ";

    $update_query_run = mysqli_query($con, $update_query);

    if($update_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$update_filename);
            if(file_exists("../uploads".$old_image))
            {
                unlink("../uploads".$old_image);
            }
        }
        redirect("edit-category.php?id=$category_id", "Category Updated Successfully");
    }
    else
    {
        redirect("edit-category.php?id=$category_id", "Something Went Wrong");
    }
}
else if(isset($_POST['delete_category_btn']))
{
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $delete_query = "DELETE FROM categories WHERE id='$category_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        redirect("category.php", "Category deleted successfully");
    }
    else
    {
        redirect("category.php", "Something went wrong ");
    }
}
else if(isset($_POST['add_booking_btn']))
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
else if(isset($_POST['add_hospital_btn']))
{
    $hosp_name = $_POST['hosp_name'];
    $hosp_email = $_POST['hosp_email'];
    $hosp_url = $_POST['hosp_url'];
    $hosp_phone = $_POST['hosp_phone'];
    $hosp_address = $_POST['hosp_address'];
    $type = $_POST['type'];
    $availability = $_POST['availability'];
    $num_of_bed = $_POST['num_of_bed'];

    $hosp_logo = $_FILES['hosp_logo']['name'];

    $path = "../uploads";

    $hosp_logo_ext = pathinfo($hosp_logo, PATHINFO_EXTENSION);
    $hosp_filename = time().'.'.$hosp_logo_ext;

    $hosp_query = "INSERT INTO hospitals 
    (hosp_name,hosp_email,hosp_website,hosp_phone,hosp_address,type,availability,num_of_bed,hosp_logo) 
    VALUES ('$hosp_name','$hosp_email','$hosp_url','$hosp_phone','$hosp_address','$type','$availability','$num_of_bed','$hosp_filename')" ;

    $hosp_query_run = mysqli_query($con, $hosp_query);
    
    if($hosp_query_run)
    {
        move_uploaded_file($_FILES['hosp_logo']['tmp_name'], $path.'/'.$hosp_filename);
        redirect("../login.php", "Your Hospital Registered Successfully");
    }
    else
    {
        redirect("../add-hospital.php", "Something Went Wrong");
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

?>