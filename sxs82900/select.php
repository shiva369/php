<!DOCTYPE html>
<html>
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function(){
				$('.delete').click(function(){
					id = $(this).attr('data-id')
					trid = 'tr-'+id;
					$.ajax({
						url:"http://localhost:10080/sxs82900/deletecontacts.php?id="+id,
						method :"POST",
						data : {id :id},
						success : function(res){
							if(res == 'success'){
							$('table tr#'+trid).remove();
						
							}
							}
					});
					});
				
				
			});
		
		
		
		</script>
		
	</head>
	<body>



	<?php
		$conn = mysqli_connect('localhost','root','','nycasoft');
		$query = "select firstName,lastName,email,phone,address,address1,city,state,zipcode,comments from contacts";
		$inser = mysqli_query($conn,$query);
		echo "<table border='1' >";
		while ($data = mysqli_fetch_assoc($inser)){
			$id = $data['phone'];
			$anchore  = "<a href=\"http://localhost:10080/sxs82900/editcontacts.php?id=$id\">Edit</a>";
			$deleteAnchore  = "<a href='javascript:void(0);' data-id=$id class='delete'>delete</a>";
			echo "<tr id='tr-'><td>".$data['firstName']."</td><td>".$data['lastName']."</td><td>".$data['email']."</td><td>".
			$data['phone']."</td><td>".$data['address']."</td><td>".$data['address1']."</td><td>".$data['city']."</td>
			<td>".$data['state']."</td><td>".$data['zipcode']."</td><td>".$data['comments']."</td><td>$anchore</td><td>$deleteAnchore</td></tr>";
		}
		echo "</table>";
	?>
	</body>
</html>
