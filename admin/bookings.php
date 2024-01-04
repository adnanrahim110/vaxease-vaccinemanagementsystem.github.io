<?php 
    include('includes/header.php');
    include('../middleware/adminmiddleware.php')
?>

<div class="container py-4"> 
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3"><i class="fa fa-calendar-check"></i> Bookings</h4>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Phone</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Message</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $booking = getAll("booking");

                                    if(mysqli_num_rows($booking) > 0)
                                    {
                                        foreach($booking as $item)
                                        {
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <p style="padding-right: 10px; padding-top: 5px; font-weight:500; " class="mb-0 text-sm"><?= $item['id']; ?></p>
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"><?= $item['name']; ?></h6>
                                                            <p class="text-xs text-secondary mb-0"><?= $item['email']; ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0"><?= $item['phone']; ?></p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs text-secondary mb-0"><?= $item['message']; ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold"><?= $item['date']; ?></span>
                                                </td>
                                                <td class="align-middle">
                                                    <button style="border: none; background: none;" type="submit" name="edit_booking_btn" class="text-secondary font-weight-bold text-xs">
                                                        Edit
                                                    </button>
                                                    <form action="code.php" method="POST">
                                                        <input type="hidden" name="booking_id" value="<?= $item['id']; ?>">
                                                        <button style="border: none; background: none" type="submit" name="delete_booking_btn" class="font-weight-bold text-xs">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
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