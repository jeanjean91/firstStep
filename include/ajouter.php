<?php 

	
$nom = $_POST['first_name'];
$prenom = $_POST['last_name'];
$email = $_POST['email'];
$connect = mysqli_connect("localhost","root","root","entreprise");
$request = "INSERT into employeerr (first_name,last_name,email)values('$nom',' $prenom','$email')";
$query = mysqli_query($connect,$request);

header("Location:../index.php?employer");



?>