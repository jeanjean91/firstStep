
<i class="fas fa-user"></i>


<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="?Home">mon site de ouf</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="?boutique">Boutique <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?cgd">Condition general de vente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="?contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="?panier">panier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="?monCompt">compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="?employer">employer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="?lang=fr">francais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="?lang=ang">ang</a>
            </li>
          
          <li class="nav-item">
              <a class="nav-link disabled" href="?lang=jp">japonais</a>
            </li>
          </ul>
            <?php
            if(isset($_GET['lang'])){
              $_SESSION['lang']=$_GET['lang'];
            }else{
              $_session['lang']='';
            }

              ?>
          <form class="form-inline mt-2 mt-md-0">

            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo $_SESSION['lang'];?></button>
          </form>
        </div>
      </nav>
    </header>