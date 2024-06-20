<?php 
  session_start();
  include('../config/dbcon.php');
  include('functions/myfunctions.php');

  if(isset($_POST['register_btn']))
{
   $cid= mysqli_real_escape_string($con,$_POST['Customer_Id']);
   $name= mysqli_real_escape_string($con,$_POST['Name']);
   $address=mysqli_real_escape_string($con,$_POST['Address']);
   $phone=mysqli_real_escape_string($con,$_POST['Phone_Number']);
   $password=mysqli_real_escape_string($con,$_POST['password']);
   $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

   
   $insert_query = "INSERT INTO customer(Customer_Id,Name,Address,Phone_Number,password) VALUES ('$cid','$name','$address','$phone','$password')";
   $insert_query_run = mysqli_query($con,$insert_query);

    if($password == $cpassword)
    {
        if($insert_query_run)
        {
          $_SESSION['message']="Registered successfully";
          header('Location: ../login.php');
        }
        else
        {
          $_SESSION['message']="Something went wrong";
          header('Location: ../register.php');
        }
    }
    else{
      $_SESSION['message']= "Passwords do not match";
      header('Location: ../register.php');

    }
}

else if(isset($_POST['login_btn']))
{
  $username=mysqli_real_escape_string($con, $_POST['username']);
  $password=mysqli_real_escape_string($con, $_POST['password']);

  $login_query = "SELECT * FROM customer WHERE name='$username' AND password='$password' "; 
  $login_query_run = mysqli_query($con,$login_query);

  if(mysqli_num_rows($login_query_run) > 0)
  {
      $_SESSION['auth']=true;

      $userdata= mysqli_fetch_array($login_query_run);
      $username= $userdata['Name'];
      $role_as=$userdata['role_as'];
      $_SESSION['auth_user'] =
       [
          'Name' => $username, 
       ];

       $_SESSION['role_as']= $role_as; 

       if($role_as == 1)
       {
        $_SESSION['message']= "Logged In Successfully";
        header(('Location: ../index.php'));
       }
       else
       {
          $_SESSION['message']= "Logged In Successfully";
          header(('Location: ../index.php'));
       }

  }
  else{
    $_SESSION['message']= "Invalid Credentials";
    header(('Location: ../login.php'));
  }
}

else if(isset($_POST['payment_btn']))
{
   $Payment_Id= mysqli_real_escape_string($con,$_POST['Payment_Id']);
   $Customer_Id= mysqli_real_escape_string($con,$_POST['Customer_Id']);
   $Total_Products=mysqli_real_escape_string($con,$_POST['Total_Products']);
   $Order_Date=mysqli_real_escape_string($con,$_POST['Order_Date']);
   $Amount=mysqli_real_escape_string($con,$_POST['Amount']);

   $show_query = "SELECT * FROM payment";
   $show_query_run = mysqli_query($con,$show_query);



}
?>