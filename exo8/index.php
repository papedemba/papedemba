<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
   
</head>
<body>
    <?php session_start(); ?>
    <form action="controller.php" method='post'>
        <label for="">Entrer un nombre positif</label>
        <input type="text" name="nombre"  value="<?php if(!isset($_SESSION['error']['nombre']) && isset($_SESSION['post'])) echo $_SESSION['post']['nombre']; else ''?>"><br>
              <?php if(isset($_SESSION['error']['nombre'])):?>
                <span style="color:red"> <?php echo $_SESSION['error']['nombre']?> </span>
                <?php session_unset();  endif ?><br>
                <input type="submit" value="ok" name="valider">
    </form>
    
</body>
</html>