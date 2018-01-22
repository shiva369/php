

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
print $firstName.'>'.$lastName.'>'.$email.'>'.$phone.'>'.$address.'>'.$address1.'>'.$city.'>'.$state .'>'. 
$zipcode .'>'. $comments;
exit;
?>
