<?php 
$conn = mysqli_connect("localhost","root","","form");
if(isset($_POST['updatebtn'])){
    $id = $_POST['id'];
    $Fname = $_POST['Fname'];
			$Lname = $_POST['Lname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$address = $_POST['address'];
			$address2 = $_POST['address2'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
            $gender = $_POST['gender'];
            
            $query = "Update register set Fname='$Fname', Lname='$Lname', email='$email', phone='$phone', password='$password', address='$address', address2='$address2', city='$city', state='$state', zip='$zip', gender='$gender' where id='$id'";
            $query_run = mysqli_query($conn,$query);
            if($query_run){
                header('Location: user.php');

            }
            else{
                header('Location: user.php');
            }
}




if(isset($_POST['deletebtn'])){
    $id = $_POST['delete'];

    $query = "Delete from register where id='$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo " Your data is deleted";
        header('Location: user.php');

    }
    else{
        echo " Your data is not deleted";
        header('Location: user.php');
    }
}

?>