<?php 
session_start();
include('includes/header.php'); ?>

<div class="py-5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_SESSION['message'])) 
            {
                    ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?= $_SESSION['message'];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                 <?php
                 unset($_SESSION['message']);
            }
            ?>
           <div class="card">
              <div class="card-header">
                  <h4>Customer Details </h4>
              </div>
              <div class="card-body">
                    <form action="functions/authcode.php" method="POST">
                        <div class="mb-1">
                            <label for="form-label" class="form-label">Customer_Id</label>
                            <input type="number" name="Customer_Id" class="form-control" >
                        </div>
                        <div class="mb-1">
                            <label for="form-label" class="form-label">Name</label>
                            <input type="text"  name="Name" class="form-control" >
                        </div>
                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text"  name="Address" class="form-control" >
                        </div>
                        <div class="mb-1">
                            <label for="exampleInputPassword1" class="form-label">Phone_Number</label>
                            <input type="number" name="Phone_Number" class="form-control" >
                        </div>
                        <div class="mb-1">
                            <label for="exampleInputPassword" class="form-label">Password</label>
                            <input type="password"  name="password" class="form-control" placeholder="Enter password" id="exampleInputPassword" >
                        </div><br>
                        <div class="mb-1">
                            <label for="form-label" class="form-label">Confirm Password</label>
                            <input type="password"  name="cpassword" class="form-control" placeholder="Confirm password">
                        </div><br>
                        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    </form>
              </div>
           </div>     
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>