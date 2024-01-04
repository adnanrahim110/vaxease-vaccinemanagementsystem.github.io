<?php
include('includes/header.php');
include('../middleware/adminmiddleware.php');
    ?>

<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3"><i class="fa fa-hospital"></i> Hospitals</h4>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Hospital Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Contact</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Address</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Type</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Available 24/7</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Number of Beds</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $hospitals = getAll("hospitals");

                                if (mysqli_num_rows($hospitals) > 0) {
                                    foreach ($hospitals as $item) {
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../uploads/<?= $item['hosp_logo'] ?>"
                                                            class="avatar avatar-sm me-1 border-radius-lg"
                                                            alt="<?= $item['hosp_name']; ?>">
                                                    </div>
                                                    <div class="mx-3 pt-2">
                                                        <h5 class="ml-0 mb-0 text-sm">
                                                            <?= $item['id']; ?>
                                                        </h5>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">

                                                        <h6 class="mb-0 text-sm">
                                                            <?= $item['hosp_name']; ?>
                                                        </h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            <?= $item['hosp_website']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <?= $item['hosp_phone']; ?>
                                                </p>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <?= $item['hosp_email']; ?>
                                                </p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <?= $item['hosp_address']; ?>
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <?= $item['type'] == 'Private' ? "Private" : "Government" ?>
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <?= $item['availability'] == 'Yes' ? "Yes" : "No" ?>
                                                </p>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0 text-sm text-center">
                                                        <?= $item['num_of_bed']; ?>
                                                    </h6>
                                                </div>
                                            </td>
                                            <td style="padding-left: 1.5rem;">
                                                <!-- <div style="padding-left: 10px;">
                                                    <a href="edit-hospital.php?id=<?= $item['id']; ?>"
                                                        class="text-secondary font-weight-bold text-xs">
                                                        Edit
                                                    </a>
                                                </div> -->
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="hospital_id" value="<?= $item['id']; ?>">
                                                    <button style="border: none; background: none; color: red;" type="submit"
                                                        name="delete_hospital_btn" class="font-weight-bold text-xs">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div class="container d-flex justify-content-center text-center bg-light pt-3 pb-1">
                                        <h5 class="text-danger text-capitalize fs-6">no record found</h5>
                                    </div>

                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="vaccine" class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Vaccines</h4>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Vaccine Name</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Manufacturer</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Description</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Age Group</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Dosage Shedule</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Side Effects</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Availability</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $vaccine = getAll("vaccine");

                                if (mysqli_num_rows($vaccine) > 0) {
                                    foreach ($vaccine as $item) {
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../uploads/<?= $item['vaccine_image'] ?>"
                                                            class="avatar avatar-sm rounded-circle me-2"
                                                            alt="<?= $item['vaccine_name'] ?>">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">
                                                            <?= $item['vaccine_name'] ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">
                                                    <?= $item['vaccine_description'] ?>
                                                </span>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <?= $item['req_age_group'] ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <?= $item['dosage_shed'] ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <?= $item['storage_req'] ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <?= $item['side_effects'] ?>
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">60%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info" role="progressbar"
                                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="vaccine_id" value="<?= $item['id']; ?>">
                                                    <button style="border: none; background: none" type="submit"
                                                        name="delete_vaccine_btn" class="font-weight-bold text-xs">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div class="container d-flex justify-content-center text-center bg-light pt-3 pb-1">
                                        <h5 class="text-danger text-capitalize fs-6">no record found</h5>
                                    </div>

                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>