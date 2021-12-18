<?php 
include('includes/header.php');
include('includes/navbar.php'); 

        
        $conn = mysqli_connect("localhost","root","","form");
        $query = "Select * from contact";
        $query_run = mysqli_query($conn,$query);

        
?>
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Contact Us
        </h6>
</div>

    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
        <thread>
            <tr>
                <th>ID</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>email</th>
                <th>message</th>
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
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['lname']; ?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php echo $row['message'];?></td>
    
    
    <td>
    <form action="update2.php" method="post">
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