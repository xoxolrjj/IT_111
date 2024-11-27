<?php
	echo "<title>Employment Management</title>";
	echo "<div align=CENTER>";
    include_once('view/navbar.php');
	echo"</div>";

	echo "<div>";				
	include_once("Controller/controller.php");
	$controller = new Controller();
	$controller->navPages();	
 
	echo "</div>";		
 
	echo "</div>";
?>