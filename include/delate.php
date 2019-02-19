<?php 
$id =$_GET['del'];


$connect = mysqli_connect("localhost","root","root","entreprise");
$request = "DELETE  from employeerr where  id=$id ";

$query = mysqli_query($connect,$request);
header("Location:../index.php?employer");



?>