<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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

</body>
</html>