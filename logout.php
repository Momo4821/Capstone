<?php


session_destroy();
$_SESSION = array();
header("location: login.php");
?>

<form>
	Name:  <input type="text" name="name"><br>
E-mail: <input type="text" name="email">

<input type="submit">

hello

</form>


?>