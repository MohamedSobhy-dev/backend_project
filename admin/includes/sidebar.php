<?php
  require_once"functions/connect.php";
  $id = $_SESSION['id'];
  $select = "SELECT * FROM users WHERE id='$id'";
  $res = $conn->query($select)->fetch_assoc();
 
  //select privliges   
  $id_priv = $res['priv'];
  $selectPriv = "SELECT * FROM privliges WHERE id = '$id_priv'";
  $res2 = $conn->query($selectPriv)->fetch_assoc();





?>


	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images/<?=  $res['img'];  ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= $res['name'] ;?>[<span style="color:red"><?= $res2['name']; ?></span>]</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
        <li class="<?php if($active == 'index'){echo "active";} ?>"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>	
        <li class="<?php if($active == 'user'){echo "active";} ?>"><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
        <li class="<?php if($active == 'product'){echo "active";} ?>"><a href="products.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Products</a></li>
        <li class="<?php if($active == 'Category'){echo "active";} ?>"><a href="category.php"><i class="fa fa-list-alt" aria-hidden="true"></i> Category</a></li>
        <li class="<?php if($active == 'brand'){echo "active";} ?>"><a href="brand.php"><i class="fa fa-amazon" aria-hidden="true"></i>
             Brand</a></li>
        <li class="<?php if($active == 'message'){echo "active";} ?>"><a href="message.php"><i class="fa fa-commenting" aria-hidden="true"></i> Messages</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->