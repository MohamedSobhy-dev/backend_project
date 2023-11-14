<?php 
$active = 'Category';
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
                                        echo "Categories";
                                    }elseif($_GET['do'] == "add"){
                                        echo "Add New Categories";
                                    }elseif($_GET['do'] == "edit"){
                                        echo "Edit Categories";
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
                                        echo "Categories";
                                    }elseif($_GET['do'] == "add"){
                                        echo "Add New Categories";
                                    }elseif($_GET['do'] == "edit"){
                                        echo "Edit Categories";
                                    }
                                ?>
                </h1>
			</div>
		</div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                 <?php 
                 if(!isset($_GET['do'])){
                    require_once"design/category/all_category.php";
                  }elseif($_GET['do'] == 'add'){
                     require_once"design/category/add_new_category.php";
                  }elseif($_GET['do'] == "edit"){
                     require_once"design/category/edit_category.php";
                  }
                 ?>


            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>