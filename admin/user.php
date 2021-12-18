<?php 
include('includes/header.php');
include('includes/navbar.php'); 

        
        $conn = mysqli_connect("localhost","root","","form");
        $query = "Select * from register";
        $query_run = mysqli_query($conn,$query);

        
        
?>
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Customers
        </h6>
</div>

    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
        <thread>
            <tr>
                <th>ID</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>email</th>
                <th>phone</th>
                <th>password</th>
                <th>address</th>
                <th>address2</th>
                <th>city</th>
                <th>state</th>
                <th>zip</th>
                <th>gender</th>
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
    <td><?php echo $row['Fname']; ?></td>
    <td><?php echo $row['Lname']; ?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['address2'];?></td>
    <td><?php echo $row['city'];?></td>
    <td><?php echo $row['state'];?></td>
    <td><?php echo $row['zip'];?></td>
    <td><?php echo $row['gender'];?></td>
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