<?php 
$id =$_POST['id'];
$nom=$_POST['first_name'];
$prenom=$_POST['last_name'];
$email=$_POST['email'];




$connect = mysqli_connect("localhost","root","root","entreprise");
$request = " UPDATE employeerr SET first_name='$nom',last_name='$prenom',email='$email' WHERE id ='$id' ";

$query = mysqli_query($connect,$request);
header("Location:../index.php?employer");



?>