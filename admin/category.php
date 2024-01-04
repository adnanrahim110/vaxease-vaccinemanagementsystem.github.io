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
                        <h4 class="text-white text-capitalize ps-3"><i class="fa fa-calendar-check"></i> Categories</h4>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Name</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $category = getAll("categories");

                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div style="padding-left: .5rem;">
                                                        <h5 class="mb-0 text-sm"><?= $item['id']; ?></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div>
                                                        <h6 class="mb-0 text-sm"><?= $item['name']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="padding-left: 1.5rem;">
                                                <img src="../uploads/<?= $item['image'] ?>" class="avatar avatar-sm me-3 border-radius-sm" alt="<?= $item['name']; ?>">
                                            </td>
                                            <td>
                                                <div class="d-flex px-3 py-1">
                                                    <p class="text-xs font-weight-bold mb-0"><?= $item['status'] == '0'? "visible":"hidden" ?></p>
                                                </div>
                                            </td>

                                            <td style="padding-left: 1.5rem;">
                                                <div style="padding-left: 10px;">
                                                    <a href="edit-category.php?id=<?= $item['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                    </a>
                                                </div>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="category_id" value="<?= $item['id']; ?>">
                                                    <button style="border: none; background: none" type="submit" name="delete_category_btn" class="font-weight-bold text-xs">
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
                                    echo "No records found";
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