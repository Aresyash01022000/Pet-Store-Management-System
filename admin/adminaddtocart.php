<?php
include('includes/header.php');
include('includes/navbar.php'); 

        
        $conn = mysqli_connect("localhost","root","","cart_system");
        $query = "Select * from product";
        $query_run = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<meta name="viewport" content="width=device-width" />
	<title>Admin Home</title>
	<style>
	#form1
				{
				width:500px;
				height:600px;
				background-color:#F5EAEA;
				margin:75px auto;padding:10px;border-radius:5%;
				}
	
			.loginheading
			{
				font-family:"TIMES NEW ROMAN";font-weight:bold;font-size:30px;
				text-align:center;
			}
		
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>
<body>
<div id="form1" class="d-flex justify-content-center">
<form action="" method="post" enctype="multipart/form-data">

	<p class="loginheading">ADD ITEMS TO DATABASE</p>	
	<div class="form-row d-flex justify-content-center">
				<div class="form-group col-md-6">
				  <label for=" firstname"><b>PRODUCT NAME</b></label>
				  <input type="text" name="name" placeholder="Enter product name" class="form-control" onfocus="myFunction(this)" required>
				</div>
				
			  </div>
			  <div class="form-row d-flex justify-content-center">
				<div class="form-group col-md-6">
				  <label for=" firstname"><b>PRODUCT PRICE</b></label>
				  <input type="text"  name="price" placeholder="Enter price" class="form-control" onfocus="myFunction(this)" required>
				</div>
				
			  </div>
				
			 
			 <div class="form-row d-flex justify-content-center">
				<div class="form-group col-md-6">
				  <label for=" firstname"><b>PRODUCT DESCRIPTION</b></label>
				  <input type="text" name="description" placeholder="Enter description" class="form-control" onfocus="myFunction(this)" required>
				</div>
			</div>
			<div class="form-row d-flex justify-content-center">
				<div class="form-group col-md-6">
				  <label for=" firstname"><b>PRODUCT CODE</b></label>
				  <input type="text" name="code" placeholder="Enter " class="form-control" onfocus="myFunction(this)" required>
				</div>
			</div>
			<div class="form-row d-flex justify-content-center">
				<div class="form-group col-md-6">
				  <label for=" firstname"><b>CHOOSE FILE TO INSERT IMAGE</b></label>
				  <input type="file" name="img">
				</div>
			</div>
				  <div  class="form-row d-flex justify-content-center"><button type="submit" type="submit" name="sub" value="Save" class="btn btn-primary" style="margin-top:20px;">SAVE TO DATABASE</button>
            </div></form>	
 
			<?php
			if(isset($_POST['sub'])){
				$product_name=$_POST['name'];
			
				$product_price=$_POST['price'];
				$product_code=$_POST['code'];
				$description=$_POST['description'];

				$filename = $_FILES["img"]["name"]; 
					$tempname = $_FILES["img"]["tmp_name"]; 
					move_uploaded_file($tempname,"$filename");
			

				if(mysqli_query($conn,"insert into product(product_name,product_image,product_price,product_code,description) value('$product_name','$filename','$product_price','$product_code','$description')")){
					echo "<script>alert('Data Saved')</script>";
				}
				else{
					echo "<script>alert('Data not Saved')</script>";
				}
			} 
			?>
		</div>
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</body>
</html>
<?php 
include('includes/scripts.php');
?>