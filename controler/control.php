

 <?php
          if (isset($_GET['Home'])) {
            include ('include/home.php');
           
          }
          elseif (isset($_GET['boutique'])) {
            include ('include/boutique.php');
          }
            elseif (isset($_GET['cgd'])) {
            include ('include/cgd.php');

          }

            elseif (isset($_GET['contact'])) {
            include ('include/contact.php');

          }
           elseif (isset($_GET['monCompt'])) {
            include ('include/compte.php');

          }
           elseif 
              
             (isset($_GET['panier'])) {
            include ('include/panier.php');

          }
          elseif 
              
             (isset($_GET['employer'])) {
            include ('include/employer.php');

          }
          elseif 
              
             (isset($_GET['delate'])) {
            include ('include/delate.php');

          }
          elseif 
              
             (isset($_GET['update'])) {
            include ('include/update.php');

          }
          
          else{
            include ('include/Home.php');
          }
          
    ?>