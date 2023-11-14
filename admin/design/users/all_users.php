
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

<?php require_once"functions/connect.php";
        $id_session = $_SESSION['id'];
        $selectB ="SELECT * FROM users WHERE id ='$id'";
        $data = $conn->query($selectB)->fetch_assoc();
        $session_id =  $data['priv'];


        ?>                        
             




<a href="?do=add" class="btn btn-success">Add New User</a>
                <br><br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>img</th>
                            <th>privliges</th>
                            <th>controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                      
<?php
$id = 0;
require_once"functions/connect.php";

$select ="SELECT * FROM users";
$res = $conn->query($select);
foreach ($res as $user) {
    ?>                      <tr>  

                            <td><?= ++$id; ?></td>
                            <td><?= $user['name']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?php 
                            $img = $user['img'];
                             ?>
                            <img src="images/<?=$img?>" alt=""> 
                            </td>
                            <td><?php

                             $priv_id= $user['priv'];
                             $selectPriv = "SELECT * FROM privliges WHERE id = '$priv_id'";
                             $res2 = $conn->query($selectPriv)->fetch_assoc();
                             echo $res2['name'];

                             ?></td>

                            <td>
                      <?php 
                      
                      if($session_id == 1){
                   
                      
                      ?>
                                <a  href="?do=edit&&id=<?= $user['id'];?>" class="btn btn-info">Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $user['id']; ?>">
                             Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?= $user['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are You Sure You Want To Delet User <i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i> 
                                        <span style="color:red ;font-size:20px;"> <?php echo $user['name']; ?></span>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="functions/users/deleteUser.php?id=<?= $user['id'];?>" class="btn btn-primary">Save changes</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                               <?php 
                                }else{
                                    echo"<i class='fa fa-times fa-2x' aria-hidden='true'></i> <span style='color:red'>Your Privliges Can`t Access TO Controlls</span>";
                                }
                               ?> 

                        </td>

                           </tr>

<?php
} ?>                            
                      
                    </tbody>
                </table>