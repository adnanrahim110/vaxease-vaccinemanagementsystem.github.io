<?php 
    include('includes/header.php');
    include('../middleware/adminmiddleware.php');
?>
<style>
    .hospital-form label {
        font-weight: 600;
    }
    .hospital-form .form-control {
        background: transparent;
        border-radius: 0;
        border: none;
        border-bottom: 1px solid #eaeaea;
        color: #6c757d;
        font-weight: 400;
        padding-top: 12px;
        padding-bottom: 12px;
        margin-top: 15px;
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

<div class="container py-4">
    <div class="row">
        <div class="col-lg-10 col-12 mx-auto">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3"><i class="fa fa-calendar-check"></i> Add Vaccine</h4>
                    </div>
                </div>
                <div class="col-lg-10 col-12 mx-auto pt-4 pb-2">
                    <div class="hospital-form p-3 pt-0">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 p-1">
                                    <label for="">Vaccine Name</label>
                                    <input type="text" name="vaccine_name" placeholder="Enter Vancine Name" class="form-control" required>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Manufacturer</label>
                                    <input type="text" name="manufacturer" placeholder="Enter Manufacturer Name" class="form-control" required>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Vaccine Description</label>
                                    <textarea rows="2" type="text" name="vaccine_description" placeholder="Enter Vaccine Description" class="form-control" required></textarea>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Required Age group</label>
                                    <input type="text" name="req_age_group" placeholder="Enter Age Group Required" class="form-control" required>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Dosage Shedule</label>
                                    <input type="text" name="dosage_shed" placeholder="Enter Dosage Shedule" class="form-control" required>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Storage Required</label>
                                    <input type="text" name="storage_req" placeholder="Enter Storage Required For The Vaccine" class="form-control" required>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Side Effects</label>
                                    <input type="text" name="side_effects" placeholder="Enter Side Effects Of The Vaccine" class="form-control" required>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Availability</label>
                                    <input type="hidden" name="availability" class="form-control" required>
                                    <select class="form-control">
                                        <option value="1" disabled selected>Select</option>
                                        <option value="1">Yes</option>
                                        <option value="2">Out of Stoke</option>
                                    </select>
                                </div>
                                <div class="col-12 p-1">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="vacine_image" class="form-control" required>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" id="submit-button" class="form-control" name="add_vaccine_btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>