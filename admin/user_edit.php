<?php 
include('includes/header.php');
include('includes/navbar.php'); 

        
        $conn = mysqli_connect("localhost","root","","form");

        
        
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
    $query = "select * from register where id='$id' ";
    $query_run = mysqli_query($conn,$query);
    
    foreach($query_run as $row)
    {

        ?>
<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $row['id']?>">
<div class="form-group">   
      <label>Fname</label>
                    <input type="text" class="form-control" name="Fname" value="<?php echo $row['Fname']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Lname</label>
                    <input type="text" class="form-control" name="Lname" value="<?php echo $row['Lname']?>" placeholder="Enter Email">
       </div>

<div class="form-group">   
      <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $row['password']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $row['address']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Address2</label>
                    <input type="text" class="form-control" name="address2" value="<?php echo $row['address2']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">
       <label>city</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $row['city']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">
       <label>state</label>
                    <input type="text" class="form-control" name="state" value="<?php echo $row['state']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">
       <label>zip</label>
                    <input type="text" class="form-control" name="zip" value="<?php echo $row['zip']?>" placeholder="Enter Email">
       </div>
       <div class="form-group">
       <label>gender</label>
                    <input type="text" class="form-control" name="gender" value="<?php echo $row['gender']?>" placeholder="Enter Email">
       </div>
       <a href="user.php" class="btn btn-danger"> Cancel</a>
       <button type="submit" name="updatebtn" class="btn btn-primary"> Update</button>
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