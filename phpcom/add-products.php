<?php include('includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="./code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-12">
                        <label for="">Select category</label>
                        <!-- <select name="Cat_Name" class="form-select mb-2">
                        <option selected>Select Category</option>
                            <?php   
                                // $categories=getAll("category");

                                // if(mysqli_num_rows($categories)>0)
                                // {
                                //     foreach($categories as $item)
                                //     {
                                //         ?>
                                //             <option value="<?=$item['Cat_Id'];?>"><?=$item['Cat_Name'];?></option>
                                //         <?php
                                //     }  

                                // }
                                // else{
                                //     echo "No category available";
                                // }
                                                         
                                ?>
                                
                                
                           
                        </select> -->
                        </div>  
                        <div class="col-md-6">
                        <label class="mb-0">Category Id</label>
                        <input type="text" required name="Cat_Id" placeholder="Enter cat id" class="form-control mb-2">
                        </div>
                        <div class="col-md-6">
                        <label class="mb-0">Name</label>
                        <input type="text" required name="Product_Name" placeholder="Enter product name" class="form-control mb-2">
                        </div>
                        <div class="col-md-12">
                            <label class="mb-0">Product Cost</label>
                            <input type="text" required name="Product_Cost" placeholder="Enter cost" class="form-control mb-2">
                        </div>
                       

                        <!-- <div class="col-md-12">
                            <label class="mb-0">Upload Image</label>
                            <input type="file" required name="Image" class="form-control mb-2">
                        </div> -->
                        <div class="row">
                            <div class="col-mod-6">
                                <label class="mb-0">Quantity</label>
                                <input type="number" required name="Quantity" placeholder="Enter the quantity" class="form-control mb-2">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button rtype="submit" class="btn btn-primary" name="add_products_btn">Save</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>