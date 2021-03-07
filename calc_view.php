<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Kredytowy</title>
    <meta name="author" content="Maciej Wojtas">
    </head>
    <body>
        <div>
    <form action="<?php print(_APP_URL);?>/calc.php" method="get">
        <label for="id_x">Kwota kredytu: </label>
        <input id="id_x" type="text" name= "x" placeholder="Podaj kwotę" ><br>
        <label for="id_y">Okres spłaty: </label>
        <input id="id_y" type="text" name= "y" placeholder="Podaj okres w latach" ><br>
        <label for="id_z">Oprocentowanie: </label>
        <input id="id_z" type="text" name= "z" placeholder="Podaj oprocentowanie" >
        <input type="submit" value="Wylicz">
        </form>
</div>


<!-- Błędy -->
<?php
if(isset($notification)){
    if(count($notification) >0){
        echo '<ol style=" padding: 5px 5px; border-radius: 5px; background-color: red; width:300px; text-align:center; list-style:none; color:yellow; ">';
        foreach ( $notification as $key => $msg ) {
            echo '<li><b>'.$msg.'</b></li>';
        }
        echo '</ol>';
    }
}
?>



<!-- Wyświetlenie wyniku -->
<?php if (isset($result)){?>
        <div style=" padding:10px; border-radius:10px; background-color:green; width:200px; height:20px; top:30px;">
        <?php echo 'Twoja rata: '.$result;?>
        </div>
        <?php } ?>
            </div>
    </body>


</html>