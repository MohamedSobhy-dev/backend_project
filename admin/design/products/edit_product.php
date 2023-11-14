<style>
        #sub:hover{
            background-color: red;
            color: white;

        }
      </style>
      <form class="editProduct">
    <?php 
         $id = $_GET['id'];
         require_once"functions/connect.php";
         $selCat = "SELECT * FROM products WHERE id = '$id'";
         $catVal = $conn->query($selCat)->fetch_assoc();
    ?>              
                     <!-- id -->
                     <input type="hidden" name="id" value="<?php echo $catVal['id'] ; ?>">
                    <!-- Name -->
                    <label>Name:</label>
                    <input type="text" name="name" placeholder="Name" class="form-control"  id="name" value="<?= $catVal['name'] ?>">
                    <div class="errName"></div>
                    <br>
                    <!-- Price -->
                    <label>Price:</label>
                    <input type="text" name="price" placeholder="price" class="form-control"  id="price" value="<?= $catVal['price'] ?>">
                    <div class="errPrice"></div>
                    <br>
                    <!-- Brand -->
                    <label>Brand:</label>
                    <select name="brand" id="brand" class="form-control">
                     <option selected value="0">Choose Brand</option>   
                    <?php 

$select_b ="SELECT * FROM brand ";
$res_b = $conn->query($select_b);
foreach($res_b as $brand){
?>  
  
                    <option value="<?php echo $brand['id'] ?>"><?php echo $brand['name'] ?></option>  
<?php    }?>                        
                    </select>
                    <div class="errBrand"></div>
                    <br>
                    <!-- Category -->
                    <label>Category:</label>
                    <select name="category" id="category" class="form-control">
                    <option selected value="0">Choose category</option> 
                    <?php 

$select_cat ="SELECT * FROM category ";
$res_cat = $conn->query($select_cat);
foreach($res_cat as $category){
?>  
  
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>  
<?php    }?> 
                    </select>
                    <div class="errCategory"></div>
                    <br>
                    <!-- cover -->
                    <label>Cover:</label>
                    <input type="file" class="form-control" name="cover" id="cover">
                    <div class="errFile"></div>
                    <br>
                    <!-- Description -->
                    <label for="">Description:</label>
                    <textarea name="description"  placeholder="Your Description " id="description" cols="30" rows="10" class="form-control"></textarea>
                    <div class="errDescription"></div>
                    <br><br><br>
                    <div id="result"></div>
                    <br>
                    <input id="sub" type="submit" value="Edit New Product" class="form-control">
            </form>
                 <br><br><br>
                             <!-- card of results -->
        <div class="card" id="mycard" style="width: 70rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Edit Product</h6>
                <p class="card-text"> </p><br><br>
            

                <a  id="userHome" href="products.php" type="button" class="btn btn-primary">Home</a>
                <a  id="userEdit" href="" type="button" class="btn btn-danger" style="width:225px ;">Edit the Same Product again</a>
            </div>
        </div>