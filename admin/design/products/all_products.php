
<style>
    img{
        width:90px ;
        height: 80px;
        border-radius: 10px;
    }   
    table{
        text-align: center;
        align-items: center;
        justify-content: center;
    }
    table thead tr th{
        text-align: center;
    }
    table thead tr{
        background: #656565;
        color: white;
    }
</style>





<a href="?do=add" class="btn btn-success">Add New Product</a>
                <br><br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Cover</th>
                            <th>User</th>
                            <th>Controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                      
<?php
$id = 0;
require_once"functions/connect.php";

$select ="SELECT * FROM products";
$res = $conn->query($select);
foreach ($res as $product) {
    ?>                      <tr>  

                            <td><?= ++$id; ?></td>
                            <td><?= $product['name']; ?></td>
                            <td><?= $product['price']; ?></td>
                            <td style="width: 350px;"><?= $product['description']; ?></td>

                            <td><?php 
                            $bran_id = $product['brand'];
                            $select_B ="SELECT * FROM brand WHERE id ='$bran_id'";
                            $res_b = $conn->query($select_B)->fetch_assoc();
                            echo $res_b['name'];
                            ?></td>

                            <td><?php
                            $category_id =  $product['category']; 
                            $select_cat ="SELECT * FROM category WHERE id ='$category_id'";
                            $res_cat = $conn->query($select_cat)->fetch_assoc();
                            echo $res_cat['name'];
                            ?></td>

                            <td><?php 
                            $cover_name = $product['cover'];
                            ?>
                            <img src="images/<?= $cover_name ?>">
                            </td>
                            <td><?php
                            $user_id = $product['user']; 
                            $select_user ="SELECT * FROM users WHERE id ='$user_id'";
                            $res_user = $conn->query($select_user)->fetch_assoc();
                            echo $res_user['name'];
                            ?></td>                          
                             <td>

                                <a  href="?do=edit&&id=<?= $product['id'];?>" class="btn btn-info">Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $product['id']; ?>">
                             Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?= $product['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are You Sure You Want To Delet Product <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i> 
                                        <span style="color:red ;font-size:20px;"> <?php echo $product['name']; ?></span>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="functions/products/deleteProduct.php?id=<?= $product['id'];?>" class="btn btn-primary">Save changes</a>
                                    </div>
                                    </div>
                                 </div>
                                </div>
                            </div>

                        </td>

                           </tr>

<?php
} ?>                            
                      
                    </tbody>
                </table>