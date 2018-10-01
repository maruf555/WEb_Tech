<?php

?>

<html>
<head>
</head>
<body>
<form name= "" method="post" action="login.php">
Username:<input type="text" name="un"/>
<br>
Fullname:<input type="text" name="fm">
<br>
Email:<input type="email" name="em">
<br>
Phone:<input type="text" name="phn">
<br>
Password:<input type="password" name="pw"/>
<br>
Confirm Password:<input type="password" name="cnpw"/>
<br>
Gender :
  <input type="radio" name="gender" value="male" checked> Male 
  <input type="radio" name="gender" value="female"> Female 
  <input type="radio" name="gender" value="other"> Other
<br>
Education: 
  <input type="checkbox" name="edu[]" value="SSC">SSC
  <input type="checkbox" name="edu[]" value="HSC">HSC
  <input type="checkbox" name="edu[]" value="BSc">BSc
  <input type="checkbox" name="edu[]" value="MSc">MSc 
<br> 
<input type="submit"/>
</form>
</body>
</html>