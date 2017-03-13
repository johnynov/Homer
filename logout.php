
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo "You have cleaned session";
   header('Refresh: 2; URL = login.php');
   echo 'mama';
?>

</body>
</html>

