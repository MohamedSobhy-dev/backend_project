

<form class="editUser">
    <?php 
        require_once"functions/connect.php";
        $id =$_GET['id'];
        $select_that_user ="SELECT * FROM users WHERE id='$id'";
        $result = $conn->query($select_that_user)->fetch_assoc();
    ?>   
         <!-- id -->
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <!-- name -->
        <label>Name:</label>
        <input type="text" name="name" placeholder="Name" class="form-control" value="<?= $result['name']; ?>" id="name" >
        <div class="errName"></div>
        <br>
        <!-- email -->
        <label>Email:</label>
        <input type="email" name="email" placeholder="email" class="form-control" value="<?= $result['email']; ?>" id="email">
        <div class="errEmail"></div>
        <br>
        <!-- password -->
        <label>Password:</label>
        <input type="password" name="pass" placeholder="New password" class="form-control"  id="password" >
        <div class="errPassEdit">*this field is not required, you already have an old password, drop new one if you want*</div>
        <br>
        <!-- image -->
        <label>Image:</label>
        <input type="file" name="img"  class="form-control" id="img" >
        <div class="errFile"></div>
        <br>
        <!-- privliges -->
        <label>Privliges:</label>
        <select name="priv" class="form-control" id="priv">
            <option  selected  value="0">choose somthing</option>
            
    <?php 
        $select_priv ="SELECT * FROM privliges ";
        $res3 = $conn->query($select_priv);
        foreach($res3 as $priv){
    ?>  
            <option value="<?php echo $priv['id'] ?>"><?php echo $priv['name'] ?></option>       
                
    <?php    }?> 
        </select>
        <div class="errPriv"></div>
        <br><br><br><br>
        <input id="sub" type="submit" value="Edit This User" class="form-control"> 
        
       
</form>
            <br><br><br>
            <!-- card of results -->
        <div class="card" id="mycard" style="width: 70rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Edit User</h6>
                <p class="card-text"> </p><br><br>
            

                <a  id="userHome" href="users.php" type="button" class="btn btn-primary">Home</a>
                <a  id="userEdit" href="" type="button" class="btn btn-danger" >Edit the Same User again</a>
            </div>
        </div>