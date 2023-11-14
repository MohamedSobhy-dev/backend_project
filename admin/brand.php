<?php 
$active = 'brand';
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
                                        echo "Brands";
                                    }elseif($_GET['do'] == "add"){
                                        echo "Add New Brands";
                                    }elseif($_GET['do'] == "edit"){
                                        echo "Edit Brands";
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
                                        echo "Brands";
                                    }elseif($_GET['do'] == "add"){
                                        echo "Add New Brands";
                                    }elseif($_GET['do'] == "edit"){
                                        echo "Edit Brands";
                                    }
                                ?>
                </h1>
			</div>
		</div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                 <?php 
                 if(!isset($_GET['do'])){
                    require_once"design/brand/all_brand.php";
                  }elseif($_GET['do'] == 'add'){
                     require_once"design/brand/add_new_brand.php";
                  }elseif($_GET['do'] == "edit"){
                     require_once"design/brand/edit_brand.php";
                  }
                 ?>


            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>