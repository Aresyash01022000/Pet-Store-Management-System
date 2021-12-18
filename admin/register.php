<?php 
include('includes/header.php');
include('includes/navbar.php'); 
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
  Add Admin Profile
 </button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POSt">

      <div class="modal-body">
       <div class="form-group">   
      <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label>Password</label>
                    <input type="password" class="form-control" name="pasword" placeholder="Enter Email">
       </div>
       <div class="form-group">   
      <label for="email1">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmpassword" placeholder="Enter Email">
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" name="registrbtn" class="btn btn-primary">Save</button>
      </div>
    </form>     
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile</h6>
</div>
<div class="card-body">
    <div class="table-responsive">

    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
        <thread>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start</th>
                <th>Salary</th>
</tr>
</thread>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<?php 
include('includes/scripts.php');
include('includes/footer.php');

?>