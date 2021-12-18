<?php 
$conn = mysqli_connect("localhost","root","","cart_system");
if(isset($_POST['updatebtn1'])){
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
			$product_price = $_POST['product_price'];
			$product_code = $_POST['product_code'];
			$description = $_POST['description'];
			
            
            $query = "Update product set product_name='$product_name', product_price='$product_price', product_code='$product_code', description='$description' where id='$id'";
            $query_run = mysqli_query($conn,$query);
            if($query_run){
                header('Location: product.php');

            }
            else{
                header('Location: product.php');
            }
}




if(isset($_POST['deletebtn1'])){
    $id = $_POST['delete'];

    $query = "Delete from product where id='$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo " Your data is deleted";
        header('Location: product.php');

    }
    else{
        echo " Your data is not deleted";
        header('Location: product.php');
    }
}

?>