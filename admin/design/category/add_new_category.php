<style>
        #sub{
          background-color: darkcyan;
          color: cornsilk;
        }
        #sub:hover{
            background-color: red;
            color: white;

        }
      </style>
<form class="addCategory">
              <!-- name -->
              <label>Category Name:</label>
              <input type="text" name="name" placeholder="Category Name" class="form-control"  id="name" >
              <div class="errName"></div>
              <br>
              <br>
              <input id="sub" type="submit" value="Add New Category" class="form-control">
</form>
                 <br><br><br>
                                <!-- card of results -->
              <div class="card" id="mycard" style="width: 70rem;">
                  <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Add Category</h6>
                      <p class="card-text"> </p><br><br>
                  

                      <a  id="userHome" href="category.php" type="button" class="btn btn-primary">Home</a>
                      <a  id="userEdit" href="" type="button" class="btn btn-danger">Add More Categories</a>
                  </div>
              </div   