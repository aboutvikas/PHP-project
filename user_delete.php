<?php


include("connection.php");  
$delete_id=$_GET['del'];  
$delete_query="DELETE from students WHERE id='$delete_id'"; 
$run=mysqli_query($dbcon,$delete_query);

?>