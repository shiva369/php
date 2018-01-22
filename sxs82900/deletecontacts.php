<?php
			$Id = isset($_GET['id']) ? $_GET['id'] : 0;
			$conn = mysqli_connect('localhost','root','','nycasoft');
			$query = "delete from contacts where phone=$Id";
			 mysqli_query($conn,$query);
			mysqli_close($conn);
			echo "success";
			exit;
	
	
			?>