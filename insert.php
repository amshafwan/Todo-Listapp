<?php

include('config.php');

$data = $_POST['data'];

mysqli_query($connect, "INSERT INTO list (data) VALUES ('$data')");
header("location:index.php");