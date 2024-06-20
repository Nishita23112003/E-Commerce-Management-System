<?php
 
 include('includes/header.php');
include('middleware/adminmiddleware.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <!-- <th>Image</th> -->
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $products=getAll("products");

                            if(mysqli_num_rows($products)>0)
                            {
                                  foreach($products as $item)
                                  {
                                    ?>
                                        <tr>
                                        <td><?=$item['Product_Id'];?></td>
                                        <td><?=$item['Product_Name'];?></td>
                                        <!-- <td><img src="../uploads/<?=$item['Image']; ?>" width="50px" alt="<?=$item['Product_Name'];?>"></td> -->
                                        
                                        
                                        <!-- <td>
                                            <a href="edit-products.php?id=<?=$item['Product_Id'];?>" class="btn btn-sm btn-primary">Edit</a>
                                           
                                        </td> -->
                                        <td>
                                        <form action="./code.php" method="POST"> 
                                              <input type="hidden" name="Product_Id" value="<?=$item['Product_Id'];?>"> 
                                            <button type="submit" class="btn btn-danger" name="delete_products_btn">Delete</button>
                                             </form>
                                        </td>
                                    </tr>
                                    <?php

                                  }  
                            }
                            else
                            {
                               echo "No records found"; 
                            }
                            ?>
                            
                        </tbody>
                    </table>               
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>