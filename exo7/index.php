<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php 
    session_start();
    ?>
  <div id="bloc">
      <h1>
          donner une date
      </h1>
      <form action="controller.php" method="POST">

          <label for="" class="case"> Entrer jour</label> <br>
              <input class="case" type="text" name="jour" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post'])) echo $_SESSION['post']['jour']; else ''?>"> <br>
              <?php if(isset($_SESSION['error']['jour'])):?>
                <span style="color:red"> <?php echo $_SESSION['error']['jour']?> </span>
                <?php endif ?>
                <br>
              <label for="" class="case"> Entrer mois</label><br>
              <input class="case" type="text" name="mois"  value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post'])) echo $_SESSION['post']['mois']; else ''?>"> <br>
              <?php if(isset($_SESSION['error']['mois'])):?>
                <span style="color:red"> <?php echo $_SESSION['error']['mois']?> </span>
                <?php  endif ?><br>

              <label for="" class="case">Entrer annee </label> <br>
              <input  class="case"type="text" name="annee"  value="<?php if(!isset($_SESSION['error']['annee']) && isset($_SESSION['post'])) echo $_SESSION['post']['annee']; else ''?>"> <br>
              <?php if(isset($_SESSION['error']['annee'])):?>
                <span style="color:red"> <?php echo $_SESSION['error']['annee']?> </span>
                <?php session_unset(); endif ?><br><br>
              <input class="case" type="submit" value="execute" name="execute">

          
      </form> 
  </div>  
</body>
</html>