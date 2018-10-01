<?php
$usr= $_POST['un'];
$fullnm= $_POST['fm'];
$email= $_POST['em'];
$phone= $_POST['phn'];
$pass= $_POST['pw'];
$gender= $_POST['gender'];


echo "Registration Successful";
echo "<br>Username: ".$usr;
echo "<br>Fullname: ".$fullnm;
echo "<br>Email: ".$email; 
echo "<br>Phone: ".$phone;
echo "<br>password is: ".$pass;
echo "<br>Gender: ".$gender;
echo "<br>Education: ";
foreach($_POST['edu'] as $ed)
{
	
	echo $ed;
}
