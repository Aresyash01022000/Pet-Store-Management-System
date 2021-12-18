<?php 
include('includes/header.php');
include('includes/navbar.php'); 

        
        $conn = mysqli_connect("localhost","root","","cart_system");

        
        
?>

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile</h6>
</div>
<div class="card-body">
<?php 
if(isset($_POST['edit_btn'])){
    $id = $_POST['edit_id'];
    $query = "select * from product where id='$id' ";
    $query_run = mysqli_query($conn,$query);
    
    foreach($query_run as $row)
    {

        ?>
<form action="update1.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $row['id']?>">
<div class="form-group">   
      <label>Product name</label>
                    <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Product_price</label>
                    <input type="text" class="form-control" name="product_price" value="<?php echo $row['product_price']?>" placeholder="Enter Email">
       </div>

<div class="form-group">   
      <label>Product code</label>
                    <input type="text" class="form-control" name="product_code" value="<?php echo $row['product_code']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Description</label>
                    <input type="text" class="form-control" name="description" value="<?php echo $row['description']?>" placeholder="Enter Email">
       </div>
       
       <a href="product.php" class="btn btn-danger"> Cancel</a>
       <button type="submit" name="updatebtn1" class="btn btn-primary"> Update</button>
       </form>
       <?php
    }

}

?>
       

</div>
</div>
</div>
</div>

<?php 
include('includes/scripts.php');


?>