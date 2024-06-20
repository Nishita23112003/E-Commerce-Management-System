<?php include('includes/header.php'); 
include('config/dbcon.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category</h4>
                </div>
                <div class="card-body">
                    <?php
                     if(isset($_GET['Cat_Id']))
                     {
                        $category_id= $_GET['Cat_Id'];  
                        $edit_category ="SELECT * FROM  category WHERE Cat_Id='$category_id'";
                        $category_run = mysqli_query($con, $edit_category);

                        if(mysqli_num_rows($category_run) > 0)
                        {
                            $row= mysqli_fetch_array($category_run);
                            ?>
                              <form action="./code.php" method="POST" enctype="multipart/form-data">
                                <input type ="text" name= "category_id" value="<?= $row['Cat_Id'] ?>">
                                <div class="row">
                                <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="Cat_Name" value="<?= $row['Cat_Name'] ?>" placeholder="Enter category name" class="form-control">
                                </div><br>
                                <div class="col-md-6">
                                    <label for="">Category Id</label>
                                    <input type="text" name="Cat_Id" value="<?= $row['Cat_Id'] ?>" placeholder="Enter id" class="form-control">
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
                                    <button type="submit" class="btn btn-primary" name="save_category_btn">Save</button>
                                </div>
                                </div>
                              </form>
                            <?php

                        }
                        else{
                            ?>
                             <h4>No records found</h4>
                            <?php
                        }
                     }
                    ?>
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

                        <div class="col-md-12">
                            <label for="">Upload Image</label>
                            <input type="file" name="Image">
                        </div><br><br>
                        <div class="col-md-12">
                            <button rtype="submit" class="btn btn-primary" name="update_category_btn">Update</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>