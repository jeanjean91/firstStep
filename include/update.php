

<br>
<br>
<br>
<?php 
$id =$_GET['id'];



$connect = mysqli_connect("localhost","root","root","entreprise");
$request = "SELECT first_name,last_name,email from employeerr WHERE id=$id";
$query = mysqli_query($connect,$request);
$tab=mysqli_fetch_array($query);

  $nom = $tab['first_name'];
  
  $prenom = $tab['last_name'];
  $email = $tab['email'];

?>
<div class="container">

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    EMPLOYER 
                    <br>
                    <small>modifier les information d'un employer</small></h1>

                    <br>
                    <br>
                    <br>


                    <form method="post" action="include/update1.php">
<div class="form-row col-md-">
    <div class="form-group col-md-6">
  
      <input type='hidden' name='id'  value="<?php echo $id; ?>">
      
    </div>
  
    <div class="form-group col-md-6">
      <label for="inputNom4">Nom</label>
      
      
      <input type='text' name='first_name'  value="<?php echo "$nom"; ?>">
      
    </div>
    <div class="form-group col-md-6">

      <label for="inputPrenom4">Prenom</label>
      
      <input type='text'name='last_name' value="<?php echo "$prenom"; ?>">
      
    </div>
  
  <div class="form-group col-md-6" >

    <label for="input">email</label>
    
    <input type='text' name='email' value="<?php echo "$email"; ?>">
  
  </div>
  
  <div>

  	  
  	 <input type="submit" name="submit" class='btn btn-success' value="update"> 
  </div>
  </div>
  </form>

            </div>
        </div>
    </div>
</div>









  </div>


