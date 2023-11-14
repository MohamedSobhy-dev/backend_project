

<form class="editBrand">
    <?php 
        require_once"functions/connect.php";
        $id =$_GET['id'];
        $select_that_brand ="SELECT * FROM brand WHERE id='$id'";
        $result = $conn->query($select_that_brand)->fetch_assoc();
    ?>   
         <!-- id -->
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <!-- name -->
        <label>Brand Name:</label>
        <input type="text" name="name" placeholder="Brand Name" class="form-control" value="<?= $result['name']; ?>" id="name" >
        <div class="errName"></div>
        <br>
        <br>
        <input id="sub" type="submit" value="Edit This Brand" class="form-control"> 
        
       
</form>
            <br><br><br>
            <!-- card of results -->
        <div class="card" id="mycard" style="width: 70rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Edit Brand</h6>
                <p class="card-text"> </p><br><br>
            

                <a  id="userHome" href="brand.php" type="button" class="btn btn-primary">Home</a>
                <a  id="userEdit" href="" type="button" class="btn btn-danger" style="width: 233px ;">Edit the Same Brand again</a>
            </div>
        </div>