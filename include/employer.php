


  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    EMPLOYER <small>ajouter un employer</small></h1>

                    <form method="POST" action="include/ajouter.php">
<div class="form-row col-md-">
    
      <div class="form-group col-md-6">
      <label for="inputNom4">id</label>
      <input type="id" name="id" id="inputEmail4" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputNom4">Nom</label>
      <input type="NOM" name="first_name" id="inputEmail4" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPrenom4">Prenom</label>
      <input type="text" name="last_name" id="inputPassword4" placeholder="Prenom">
    </div>
  
  <div class="form-group col-md-6" >
    <label for="input">email</label>
    <input type="text" name="email" id="inputEmail4" placeholder=" email">
  </div>
  <div></div>
  <div>

     <input type="submit" name="submit" class='btn btn-warning' value="ajouter"> 

  </div>
  </div>
  </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
<?php if(isset($_POST['choix'])){$choix=$_POST['choix'];}
else{$choix= 'last_name';}?>
<div>
  tri <form method="post" action="index.php?employer" >
    <select name='choix'>
  <option value="id" <?php if($choix == 'id'){echo "selected=selected"; } ?>>id</option>
  <option value="last_name" selected="id" <?php if($choix== 'last_name'){echo "selected=selected"; } ?>>nom</option>
  <option value="first_name"<?php if($choix  == 'first_name'){echo "selected=selected"; } ?>>prenom</option>
  <option value="email"<?php if($choix  == 'email'){echo "selected=selected"; } ?>>email</option>
  
</select>
<input type="submit" value="ok" >
  
 </forme>
 
</div>
<br>




	<table border ="1">
		<tr>
	 <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>email</th>
    <th>Action</th>
    
  </tr>
<?php


$connect = mysqli_connect("localhost","root","root","entreprise"); 
$result = "SELECT count(id)as total from employeerr  ";
$query1 = mysqli_query($connect,$result);
$row=mysqli_fetch_array($query1);
$nb= $row['total'];
$pageCourente;
$page =0;
if(isset($_GET['page'])){
  $pageCourente = $_GET['page'];
}else {$pageCourente = 1;}
$affiche =50;
$totalPage = ceil($nb/$affiche );

$page =($pageCourente -1) * $affiche ;

$connect = mysqli_connect("localhost","root","root","entreprise");
$request = "SELECT `id`, `first_name`, `last_name`, `email` FROM `employeerr`ORDER by $choix LIMIT $page,$affiche ";
$query = mysqli_query($connect,$request);
while($tab=mysqli_fetch_array($query)){
	$prenom = $tab["first_name"];
	$id = $tab['id'];
	$nom = $tab["last_name"];
	$email = $tab["email"];
  
	
	echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td> 
	<td>$email</td><td>
	<button type='button' class='btn btn-danger'><a href='include/delate.php?del=$id'>suprimer</a></button>
	<a href='?update&id=$id'><button type='button' class='btn btn-success'>update</button></a>
	</tr>";
	}


?>


</table>
<br>
<nav aria-label="Page navigation example" >
  <ul class="pagination justify-content-center">
    <li class="page-item disabled" >
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <?php 
    $page++;
    
    for($j = 1;$j <= $totalPage ; $j++ ){
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"?employer&page=$j\">$j</a></li>";

   

    }?>
     
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>