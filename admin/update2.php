<?php 
$conn = mysqli_connect("localhost","root","","form");
if(isset($_POST['deletebtn'])){
    $id = $_POST['delete'];

    $query = "Delete from contact where id='$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo " Your data is deleted";
        header('Location: contact.php');

    }
    else{
        echo " Your data is not deleted";
        header('Location: user.php');
    }
}

?>