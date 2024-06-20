<?php
session_start();
include('config/dbcon.php');
include('functions/myfunctions.php');

if(isset($_POST['add_category_btn']))
{
    $Cat_Name=$_POST['Cat_Name'];
    $Cat_Id=$_POST['Cat_Id'];
    $Status=isset($_POST['Status']) ? '1':'0';
    // $Image=$_FILES['Image']['Cat_Name'];

    // $path="../uploads/";

    // $image_ext=pathinfo($Image, PATHINFO_EXTENSION);
    // $filename=time().'.'.$image_ext;

    $cate_query="INSERT INTO category (Cat_Id,Cat_Name,Status)VALUES ('$Cat_Id','$Cat_Name','$Status')";
 
    $cate_query_run=mysqli_query($con, $cate_query);

    if($cate_query_run)
    {
        // move_uploaded_file($_FILES['Image']['tmp_name'],$path.'../uploads/'.$filename);
        redirect("add-category.php","Category added successfully");
    }
    else
    {
        redirect("add-category.php","Something went wrong");
    }
}

if(isset($_POST['update_category_btn']))
{
    $Cat_Id = $_POST['Cat_Id'];
    $Cat_Name=$_POST['Cat_Name'];
    $Cat_Id=$_POST['Cat_Id'];
    $Status=isset($_POST['Status']) ? '1':'0';
    // $Image=$_FILES['Image']['Cat_Name'];

    $query = "UPDATE category SET Cat_Name= '$Cat_Name', Cat_Id='$Cat_Id', Status= '$Status' WHERE Cat_Id='$Cat_Id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Updated Successfully";
        header('Location:add-category.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location:edit-category.php');
        exit(0);
    }
}

elseif(isset($_POST['delete_category_btn']))
{
    $category_id= mysqli_real_escape_string($con, $_POST['Cat_Id']);

    $category_query="SELECT * FROM category WHERE Cat_Id='$category_id' ";
    $category_query_run=mysqli_query($con, $category_query);
    $category_data=mysqli_fetch_array($category_query_run);
    // $image= $category_data['Image'];

    $delete_query = "DELETE FROM category WHERE Cat_Id='$category_id'";
    $delete_query_run=mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        // if(file_exists("./uploads/".$old_image))
        // {
        //     unlink("./uploads/".$old_image);
        // }
        redirect("category.php", "Category deleted successfully");
    }
    else{
        redirect("category.php", "Something went wrong");
    }
}
// else if(isset($_POST['add_products_btn']))
// {
//     $Cat_Id=$_POST['Cat_Id'];

//     $Product_Id=$_POST['Product_Id'];

//     $Product_Name=$_POST['Product_Name'];
//     $Product_Cost=$_POST['Product_Cost'];
//     $Quantity=isset($_POST['Quantity']);

//     $Image=$_FILES['Image']['Product_Name'];

//     $path="../uploads/";

//     $image_ext=pathinfo($Image,PATHINFO_EXTENSION);
//     $filename=time().'.'.$image_ext;

//     $product_query="INSERT INTO products (Product_Id,Cat_Id,Product_Name,Product_Cost,Quantity,Image) VALUES ('$Product_Id','$Cat_Id','$Cat_Name','$Product_Cost','$Quantity','$Image')";

//     $product_query_run=mysqli_query($con, $product_query);

//     if($product_query_run)
//     {
//         move_uploaded_file($_FILES['Image']['tmp_name'],$path.'/'.$filename);
//         redirect("add-products.php","Products added successfiully");
//     }
//     else{
//         redirect("add-products.php","Something went wrong");
// }
// }

// else if(isset($_POST['update_products_btn']))
// {
//     $Cat_Id=$_POST['Cat_Id'];

//     $Product_Id=$_POST['Product_Id'];

//     $Product_Name=$_POST['Product_Name'];
//     $Product_Cost=$_POST['Product_Cost'];
//     $Quantity=isset($_POST['Quantity']);
    

//     $path="../uploads/";

//     $new_image=$_FILES['Image']['Product_Name'];
//     $old_image=$_POST['old_image'];

//     if($new_image!="")
//     {
//         $image_ext=pathinfo($new_image,PATHINFO_EXTENSION);
//         $update_filename=time().'.'.$image_ext;

//     }
//     else
//     {
//         $update_filename=$old_image;
//     }
//     $update_product_query="UPDATE products SET Cat_Id='$Cat_Id',Product_Name='$Product_Name',Product_Cost='$Product_Cost',Quantity='$Quantity',Image='$update_filename' Where Product_Id='$Product_Id'";

//     $update_product_query_run=mysqli_query($con, $update_product_query );

//     if($update_product_query_run)
//     {
//         if($_FILES['Image']['Product_Name']!="")
//         {
//             move_uploaded_file($_FILES['Image']['tmp_name'], $path.'/'.$update_filename);
//             if(file_exists("../uploads/".$old_image))
//             {
//                 unlink("../uploads/".$old_image);
//             }
//         }
//         redirect("edit-products.php?Product_Id=$product_Id","Product added successfully");
//     }
//     else{
//         redirect("edit-products.php?Product_Id=$product_Id","something went wrong");
//     }



// }

// elseif(isset($_POST['delete_products_btn']))
// {
//     $Product_Id= mysqli_real_escape_string($con, $_POST['Product_Id']);

//     $Products_query="SELECT * FROM products WHERE Product_Id='$Product_Id' ";
//     $Products_query_run=mysqli_query($con, $Products_query);
//     $Products_data=mysqli_fetch_array($Products_query_run);
//     $image= $Products_data['Image'];

//     $delete_query = "DELETE FROM products WHERE Product_Id='$Product_Id'";
//     $delete_query_run=mysqli_query($con, $delete_query);

//     if($delete_query_run)
//     {
//         // if(file_exists("./uploads/".$old_image))
//         // {
//         //     unlink("./uploads/".$old_image);
//         // }
//         redirect("products.php", "Products deleted successfully");
//     }
//     else{
//         redirect("products.php", "Something went wrong");
//     }
// }
// else

if(isset($_POST['add_products_btn'])) {
    $Cat_Id = $_POST['Cat_Id'];
    $Product_Id = $_POST['Product_Id'];
    $Product_Name = $_POST['Product_Name'];
    $Product_Cost = $_POST['Product_Cost'];
    $Quantity = isset($_POST['Quantity']) ? $_POST['Quantity'] : 0;
    // $Image = $_FILES['Image']['name'];

    // $path = "../uploads/";

    // $image_ext = pathinfo($Image, PATHINFO_EXTENSION);
    // $filename = time() . '.' . $image_ext;

    $product_query = "INSERT INTO products (Product_Id, Cat_Id, Product_Name, Product_Cost, Quantity) 
                      VALUES ('$Product_Id', '$Cat_Id', '$Product_Name', '$Product_Cost', '$Quantity')";

    $product_query_run = mysqli_query($con, $product_query);

    if($product_query_run) {
        // move_uploaded_file($_FILES['Image']['tmp_name'], $path . $filename);
        redirect("add-products.php", "Product added successfully");
    } else {
        redirect("add-products.php", "Something went wrong");
    }


} 

elseif(isset($_POST['update_products_btn'])) {
    $Product_Id = $_POST['Product_Id'];
    $Product_Name = $_POST['Product_Name'];
    $Product_Cost = $_POST['Product_Cost'];
    $Cat_Id = $_POST['Cat_Id'];
    $Quantity = isset($_POST['Quantity']) ? $_POST['Quantity'] : 0;

    // Check if a new image is uploaded
    if($_FILES['Image']['name'] != '') {
        $Image = $_FILES['Image']['name'];
        $path = "../uploads/";
        $image_ext = pathinfo($Image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;

        move_uploaded_file($_FILES['Image']['tmp_name'], $path . $filename); // Correct file path

        // Update product with new image
        $product_query = "UPDATE products SET Product_Name='$Product_Name', Product_Cost='$Product_Cost', Cat_Id='$Cat_Id', Quantity='$Quantity', Image='$filename' WHERE Product_Id='$Product_Id'";
    } else {
        // Update product without changing image
        $product_query = "UPDATE products SET Product_Name='$Product_Name', Product_Cost='$Product_Cost', Cat_Id='$Cat_Id', Quantity='$Quantity' WHERE Product_Id='$Product_Id'";
    }

    $product_query_run = mysqli_query($con, $product_query);

    if($product_query_run) {
        redirect("add-products.php", "Product updated successfully");
    } else {
        redirect("edit-products.php?Product_Id=$Product_Id", "Something went wrong");
    }


}

elseif(isset($_POST['delete_products_btn'])) {
    $product_id = mysqli_real_escape_string($con, $_POST['Product_Id']);

    $product_query = "SELECT * FROM products WHERE Product_Id = '$product_id'";
    $product_query_run = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    // $image = $product_data['Image'];

    $delete_query = "DELETE FROM products WHERE Product_Id = '$product_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run) {
        // if(file_exists("../uploads/".$image)) {
        //     unlink("../uploads/".$image);
        // }
        redirect("products.php", "Product deleted successfully");
    } else {
        redirect("products.php", "Something went wrong");
}
}
{
    header('Location: ../index.php');
}

?>
