<?php 
    include('includes/header.php');

?>

<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <?php
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $vaccine = getbyId("vaccine", $id);
                
                if(mysqli_num_rows($vaccine) > 0)
                {
                    $data = mysqli_fetch_array($category);
                    ?>
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h4 class="text-white text-capitalize ps-3"><i class="fa fa-calendar-check"></i> Edit Vaccine</h4>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-5 pt-0">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" name="vaccine_id" value="<?= $data['id'] ?>">
                                                <label for="">Name</label>
                                                <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Enter category Name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Slug</label>
                                                <input type="text" name="slug" value="<?= $data['slug'] ?>" placeholder="Enter Slug" class="form-control">
                                            </div>
                                            <div class="col-md-12 pt-2">
                                                <label for="">Description</label>
                                                <textarea rows="3" name="description" placeholder="Enter Descrpition" class="form-control"><?= $data['description'] ?></textarea>
                                            </div>
                                            <div class="col-md-12 pt-2">
                                                <label for="">Upload Image</label>
                                                <input type="file" name="image" class="text-secondary text-s font-weight-bold opacity-10 form-control">
                                                <label for="" class="pt-2">Current Image</label>
                                                <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                <img class="pt-2 avatar avatar-m me-3 border-radius-sm" src="../uploads/<?= $data['image'] ?>" alt="">
                                            </div>
                                            <div class="col-md-12 pt-2">
                                                <label for="">Meta Title</label>
                                                <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" placeholder="Enter meta title" class="form-control">
                                            </div>
                                            <div class="col-md-12 pt-2">
                                                <label for="">Meta Description</label>
                                                <textarea type="text" name="meta_description" placeholder="Enter meta description" class="form-control"><?= $data['meta_description'] ?></textarea>
                                            </div>
                                            <div class="col-md-12 pt-2">
                                                <label for="">Meta Keywords</label>
                                                <textarea rows="3" name="meta_keywords" placeholder="Enter meta keywords" class="form-control"><?= $data['meta_keywords'] ?></textarea>
                                            </div>
                                            <div class="col-md-6 pt-2">
                                                <label for="">Status</label>
                                                <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                                            </div>
                                            <div class="col-md-6 pt-2">
                                                <label for="">Popular</label>
                                                <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                else
                {
                    echo "Category not found";
                }
            }
            else
            {
                echo "Id missing from url";
            }
            ?>
            
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>