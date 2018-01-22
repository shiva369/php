<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>   forms </title>
		<style>
	
			h1,p{
				text-align: center;
				}
			#name{
				padding-left: 430px;
				}
			.input{
				height: 30px;
			
				}
			.submit{  
				color:blue;
				align: center;
				}
		</style>
		<?php
			$Id = isset($_GET['id']) ? $_GET['id'] : 0;
			$conn = mysqli_connect('localhost','root','','nycasoft');
			$query = "SELECT firstName,lastName,email,address,address1,city,state,zipcode,comments from contacts where phone = $Id";
				$inser = mysqli_query($conn,$query);
				$res = mysqli_fetch_assoc($inser);
				mysqli_close($conn);
	
	
	
			?>
	
	
	</head>
	<body>
	<?php
			$Id = isset($_GET['id']) ? $_GET['id'] : 0;
			$conn = mysqli_connect('localhost','root','','nycasoft');
			$query = "SELECT firstName,lastName,email,address,address1,city,state,zipcode,comments from contacts where phone = $Id";
				$inser = mysqli_query($conn,$query);
				$res = mysqli_fetch_assoc($inser);
				mysqli_close($conn);
	
	
	
			?>
	
      <?php include("new.html"); ?>
		
<h1> CONTACT INFORMATION </h1>
			<p> please fill out contact information below.</p>
			<form action='http://localhost:10080/sxs82900/db.php?id=<?php $Id ?>' method="post">
			<div  id="name">			
				<h3><label>Name*</label> <br>
				<input type ="text" name = "firstName" class = "input"  size = "40" placeholder="First Name" value = "<?php 
				echo $res['firstName'];?>"> &nbsp
				
				<input type ="text" name = "lastName" class ="input" size = "40" placeholder="Last Name" value = "<?php 
				echo $res['lastName']; ?>"></h3>
				<h3><label>Email*</label><br>
				<input type ="text" name = "email" class ="input" size  = "90" placeholder="example@gmail.com" value = "<?php 
				echo $res['email']; ?>"></h3>
				<h3><label>phone*</label><br>
				<input type ="phone" name = "phone" class ="input" size  = "90" placeholder="(xxx)-(xxx)-xxxx">
				<h3><label>Address*</label><br>
				<input type ="text" name = "address" class ="input" size  = "90" value = "<?php 
				echo $res['address']; ?>"> <br> <br>
				<input type ="text" name = "address1" class ="input" size  = "90" value = "<?php 
				echo $res['address1']; ?>"> <br> <br>
				<input type ="text" name = "city" class ="input" size  = "20" placeholder="city" value = "<?php 
				echo $res['city']; ?>"> &nbsp &nbsp
				<select class ="input"  placeholder="state" name = "state" value = "<?php 
				echo $res['state']; ?>">
					<option value="mo">missouri</option>
					<option value="tx">texas</option>
					<option value="ak">arkansas</option>
				<option value="az">arizona</option>
				</select> &nbsp
				<input type ="text" name = "zipcode" class ="input" size  = "20" value = "<?php 
				echo $res['zipcode']; ?>"> <br>
				<h3><label>Comments </label> <br>
				<textarea  name = "comments" value = "<?php 
				echo $res['comments']; ?>"></textarea> <br>
				<input type="submit" value = "SUBMIT FORM"> <br> <br></h3>
			</div>
			
			</form>

	
	</body>
</html>


























