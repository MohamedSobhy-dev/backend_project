
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





<a href="?do=add" class="btn btn-success">Add New Category</a>
                <br><br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                      
<?php
$id = 0;
require_once"functions/connect.php";

$select ="SELECT * FROM category";
$res = $conn->query($select);
foreach ($res as $cat) {
    ?>                      <tr>  

                            <td><?= ++$id; ?></td>
                            <td><?= $cat['name']; ?></td>
                          
            
                            <td>

                                
                                <a  href="?do=edit&&id=<?= $cat['id'];?>" class="btn btn-info">Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $cat['id']; ?>">
                             Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?= $cat['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are You Sure You Want To Delet category <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i> 
                                        <span style="color:red ;font-size:20px;"> <?php echo $cat['name']; ?></span>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="functions/category/deletecat.php?id=<?= $cat['id'];?>" class="btn btn-primary">Save changes</a>
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