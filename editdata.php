<?php

include('config.php');
$id = $_POST ['id'];
$data = $_POST ['data'];
mysqli_query($connect, "UPDATE list SET data = '$data' WHERE id='$id'");
header("location:index.php");