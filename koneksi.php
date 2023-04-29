<?php
$kon = mysqli_connect("localhost", "root", "", "datapakar");
if (mysqli_connect_errno()) {
	echo "Failed to Connect to Mysql : " . mysqli_connect_error();
}
