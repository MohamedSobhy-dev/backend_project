<?php 
$active = 'message';
require_once"includes/header.php";
require_once"includes/sidebar.php";

?>

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
    .myspan{
        color:red;
    }
</style>


		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">
                Messages
                </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
                <h1 class="page-header">
                Messages
                </h1>
			</div>
		</div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">







                <br><br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>time</th>
                            <th>view</th>
                            <th>View Message</th>
                        </tr>
                    </thead>
                    <tbody>
                      
<?php
$id = 0;
require_once"functions/connect.php";

$select ="SELECT * FROM messages";
$res = $conn->query($select);
foreach ($res as $message) {
    ?>                      <tr>  

                            <td><?= ++$id; ?></td>
                            <td><?= $message['name']; ?></td>
                            <td><?= $message['email']; ?></td>
                            <td><?= $message['phone']; ?></td>
                            <td><?= $message['time']; ?></td>
                            <td class="view"><?php 
                            $view_id =  $message['view']; 
                            if($view_id === "0"){
                                echo"<span class='myspan'><i class='fa fa-exclamation fa-2x' aria-hidden='true'></i>Unread </span>";
                            }else{
                                echo"read";
                            }
                            ?></td>
                          
            
                            <td>

                                
                                
                                 
                                <!-- Button trigger modal -->
                                <button type="button" data-id="<?= $message['id']; ?>" class="btn  modalbtn" data-toggle="modal" data-target="#<?= $message['id']; ?>">
                                <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?= $message['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      <span style="color:red;">Message</span><br><?= $message['message']; ?>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>                                    
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Save Changes</button>                                    
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
            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>