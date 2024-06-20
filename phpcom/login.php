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
                  <h4>Login Form</h4>
              </div>
              <div class="card-body">
                    <form action="functions/authcode.php" method="POST">
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter username" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword" class="form-label">Password</label>
                            <input type="password"  name="password" class="form-control" placeholder="Enter password" id="exampleInputPassword" >
                        </div>
                        <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                    </form>
              </div>
           </div>     
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>