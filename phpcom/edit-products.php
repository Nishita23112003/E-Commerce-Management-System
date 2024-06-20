<?php include('includes/header.php');
include('middleware/adminMiddleware.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php 
                if(isset($_GET['Product_Id']))
                {

                    $Product_Id=$_GET['Product_Id'];

                    $products=getByID("products",$Product_Id);

                    if(mysqli_num_rows($products)>0)
                    {
                        $data=mysqli_fetch_array($products);
                        ?>
                        <div class="card">
                        <div class="card-header">
                            <h4>Edit Product
                                <a href="products.php" class="btn btn-primary float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                <div class="col-md-12">
                                <label for="">Select category</label>
                                <!-- <select name="category_id" class="form-select mb-2">
                                <option selected>Select Category</option>
                                    <?php   
                                        // $categories=getAll("category");

                                        // if(mysqli_num_rows($categories)>0)
                                        // {
                                        //     foreach($categories as $item)
                                        //     {
                                        //         ?>
                                        //             <option value="<?=$item['Cat_Id'];?>"><?=$data['category_id']==$item['Product_Id']?'selected':''?> <?=$item['Product_Name'];?></option>
                                        //         <?php
                                        //     }  

                                        // }
                                        // else{
                                        //     echo "No category available";
                                        // }
                                                                
                                        ?>
                                        
                                        
                                
                                </select> -->
                                </div>  

                                <input type="hidden" name="Product_Id" value="<?=$data['Product_Id'];?>">
                                <div class="col-md-6">
                                <label class="mb-0">Name</label>
                                <input type="text" required name="Product_Name" value="<?=$data['Product_Name'];?>"placeholder="Enter category name" class="form-control mb-2">
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-0">Product Cost</label>
                                    <input type="text" required name="Product_Cost" value="<?=$data['Product_Cost'];?>" placeholder="Enter cost" class="form-control mb-2">
                                </div>
                            

                                <!-- <div class="col-md-12">
                                    <label class="mb-0">Upload Image</label>
                                    <input type="hidden" name="old_image" value="<?=$data['Image'];?>">
                                    <input type="file" name="Image" class="form-control mb-2">
                                    <label class='mb-0'>Current Image</label>
                                    <img src="../uploads/<?=$data['Image'];?>" alt="Product Image" height="50px" width="50px">


                                </div> -->
                                <div class="row">
                                    <div class="col-mod-6">
                                        <label class="mb-0">Quantity</label>
                                        <input type="number" required name="Quantity" value="<?=$data['Quantity'];?>"placeholder="Enter the quantity" class="form-control mb-2">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button rtype="submit" class="btn btn-primary" name="update_products_btn">Update</button>
                                </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    <?php
                    }
                    else
                    {
    
                        echo "Product not found";
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

<?php include('includes/footer.php');?>
