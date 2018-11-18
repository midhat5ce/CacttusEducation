<?php 

function getConnection(){
	$connection = mysqli_connect("localhost", "root", "", "project");

	if (mysqli_connect_errno($connection)) {
		die ("No connection to db");
	}

	return $connection;
}
 ?>