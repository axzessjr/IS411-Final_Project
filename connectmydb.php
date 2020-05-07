<?php
// File: Connect mydb.php

$dbLocalhost = mysqli_connect("localhost", "root", "", "project")
	or die("Could not connect: " . mysqli_connect_error());
?>