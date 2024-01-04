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
                        <h4 class="text-white text-capitalize ps-3"><i class="fa fa-calendar-check"></i> Add Category</h4>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-5 pt-0">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Name</label>
                                    <input type="text" name="name" placeholder="Enter category Name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" placeholder="Enter Slug" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Description</label>
                                    <textarea rows="3" name="description" placeholder="Enter Descrpition" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Meta Title</label>
                                    <input type="text" name="meta_title" placeholder="Enter meta title" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Meta Description</label>
                                    <input type="text" name="meta_description" placeholder="Enter meta description" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Meta Keywords</label>
                                    <textarea rows="3" name="meta_keywords" placeholder="Enter meta keywords" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Popular</label>
                                    <input type="checkbox" name="popular">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
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