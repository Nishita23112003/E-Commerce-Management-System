<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="./code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="Cat_Name" placeholder="Enter category name" class="form-control">
                        </div><br>
                        <div class="col-md-6">
                            <label for="">Category Id</label>
                            <input type="text" name="Cat_Id" placeholder="Enter id" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name="Status">
                        </div>

                        <!-- <div class="col-md-12">
                            <label for="">Upload Image</label>
                            <input type="file" name="Image">
                        </div><br><br> -->
                        <div class="col-md-12">
                            <button rtype="submit" class="btn btn-primary" name="add_category_btn">Save</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>