<?php

session_start();

if (isset($_SESSION['IS_LOGIN'])) {
	echo "Hello" . "  ". "<b>" . ucwords($_SESSION['EMAIL']). "</b>";		
}else{
	header("Location:login.php");
	die();
}

?>
<br><br>
<div class="card text-center" style="padding:20px;">
  <h3>User Dashboard</h3>
</div><br>
<p><a href="logout.php">Logout</a></p>


