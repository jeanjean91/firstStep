<?php

 
 //$nombrepage = "SELECT COUNT(id) FROM employer3 ";
// echo $nombrepage;
/*$page ;
$offset =50;
$totalPage = ceil(998 /$offset );
if(isset($_GET['page'])){
  $pageCourente= $_GET['page'];
}
//echo $totalPage;
$page =($offset * $pageCourente) -$pageCourente;
$connect = mysqli_connect("localhost","root","root","entreprise");
$request = "SELECT `id`, `first_name`, `last_name`, `email` FROM `employer3` LIMIT $offset OFFSET $page";

$query = mysqli_query($connect,$request);

while($tab=mysqli_fetch_array($query)){

	$prenom = $tab["first_name"];
	$id = $tab["id"];
	$nom = $tab["last_name"];
	$email = $tab["email"];
  for($i=0;$i<=$page;$i++){
	
	echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td> 
	<td>$email</td><td>
	<a href=\"include/delate.php?id=$id\"><button type='button' class='btn btn-danger'>suprimer</button></a>
	<a href=\"?update&id=$id\"><button type='button' class='btn btn-success'>update</button></a>
	</tr>";
	}
}

?>
*/