<?php
	$con = mysqli_connect("localhost", "root", "") or die (mysqli_error());
	mysqli_select_db($con, "tsismosadb") or die (mysqli_error($con));
?>