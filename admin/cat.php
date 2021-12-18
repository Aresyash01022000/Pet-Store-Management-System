<?php 
include('includes/header.php');
include('includes/navbar.php'); 

        
        $conn = mysqli_connect("localhost","root","","cart_system_pet2");
        $query = "Select * from product";
        $query_run = mysqli_query($conn,$query);
        
?>
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Total Cats
        <a href="adminaddtocart.php" class="btn btn-primary"> Add Cat</a>
        </h6>
</div>

    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
        <thread>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product image</th>
                <th>Product code</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
</tr>
</thread>
<tbody>
    <?php 
      if(mysqli_num_rows($query_run) >0){
          while($row = mysqli_fetch_assoc($query_run))
          {
              ?>

             
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><?php echo '<img src="upload/'.$row['product_image'].'" width="100px;" height="100px;" alt="product_image">'?></td>
    <td><?php echo $row['product_code'];?></td>
    <td><?php echo $row['description'];?></td>
    <td>
    <form action="user_edit.php" method="POST"> 
    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT </button>
    </form>
    </td>
    <td>
    <form action="update.php" method="post">
    <input type="hidden" name="delete" value="<?php echo $row['id']?>">
     <button type="submit" name="deletebtn" class="btn btn-danger"> Delete </button>
     </form>
     </td>
</tr>
<?php
          }
      }
      else {
          echo " No record found";
      }
    ?>
</tbody>
</table>



<?php 
include('includes/scripts.php');


?>