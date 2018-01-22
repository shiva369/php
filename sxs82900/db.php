

<?php
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : ' ' ;
$lastName  = isset($_POST['lastName']) ? $_POST['lastName'] : ' ' ;
$email     = isset($_POST['email']) ? $_POST['email'] : ' ' ;
$phone     = isset($_POST['phone']) ? $_POST['phone'] : ' ' ;
$address   = isset($_POST['address']) ? $_POST['address'] : ' ' ;
$address1  = isset($_POST['address1']) ? $_POST['address1'] : ' ' ;
$city      = isset($_POST['city']) ? $_POST['city'] : ' ' ;
$state     = isset($_POST['state']) ? $_POST['state'] : ' ' ;
$zipcode   = isset($_POST['zipcode']) ? $_POST['zipcode'] : ' ' ;
$comments  = isset($_POST['comments']) ? $_POST['comments'] : ' ' ;
$Id = isset($_GET['id']) ? $_GET['id'] : 0;
$conn = mysqli_connect('localhost','root','','nycasoft');
if($Id){
	$query = "update contacts set firstName = '$firstName',lastName ='$lastName', email='$email', address='$address' ,address1 = '$address1',
city = '$city', state='$state',zipcode='$zipcode',comments ='$comments' where phone= $Id"; 
}
else{
$query = "insert into contacts values('$firstName','$lastName','$email', $phone ,'$address' ,'$address1',
'$city' ,'$state' ,$zipcode ,'$comments')";
}
$inser = mysqli_query($conn,$query);
mysqli_close($conn);
header("location:http://localhost:10080/sxs82900/select.php")
?>
