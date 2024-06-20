<?php
 
 include('includes/header.php');
include('middleware/adminmiddleware.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <!-- <th>Image</th> -->
                                <th>Status</th>
                                <th>Edit</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $category= getAll("category");

                                if(mysqli_num_rows($category)> 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?=$item['Cat_Id'];?></td>
                                                <td><?=$item['Cat_Name'];?></td>
                                                <!-- <td>
                                                    <img src="../uploads/ <?= $item['Image']; ?>" width="50px" alt="<?= $item['Cat_Name'];?>">
                                                </td>
                                                 -->
                                                
                                                <td><?= $item['Status']=='0'? "visible":"hidden"?></td>
                                                <td>
                                                    <a href="edit-category.php?id= <?=$item['Cat_Id'];?>" class="btn btn-primary">Edit</a>
                                                    <form action="./code.php" method="POST"> 
                                                         <input type="hidden" name="Cat_Id" value="<?=$item['Cat_Id'];?>">
                                                        <button type="submit" class="btn btn-danger" name="delete_category_btn">Delete</button>
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

<?php include('includes/footer.php'); ?>