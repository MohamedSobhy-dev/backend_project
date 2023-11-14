<?php 
$active = 'user';
require_once"includes/header.php";
require_once"includes/sidebar.php";

?>


		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">
                                <?php
                                    if(!isset($_GET['do'])){
                                        echo "Users";
                                    }elseif($_GET['do'] == "add"){
                                        echo "Add New Users";
                                    }elseif($_GET['do'] == "edit"){
                                        echo "Edit User";
                                    }
                                ?>
                </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
                <h1 class="page-header">
                               <?php
                                    if(!isset($_GET['do'])){
                                        echo "Users";
                                    }elseif($_GET['do'] == "add"){
                                        echo "Add New Users";
                                    }elseif($_GET['do'] == "edit"){
                                        echo "Edit User";
                                    }
                                ?>
                </h1>
			</div>
		</div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                 <?php 
                 if(!isset($_GET['do'])){
                    require_once"design/users/all_users.php";
                 }elseif($_GET['do'] == 'add'){
                    require_once"design/users/add_new_user.php";
                 }elseif($_GET['do'] == "edit"){
                    require_once"design/users/edit_user.php";
                 }
                 ?>


            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>