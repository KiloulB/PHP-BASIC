<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <link rel="stylesheet" href="_styling/_css/style.css">
  </head>
  <?php include 'includes/menu.php';?>
  <?php include 'includes/functions.php';?>
  <div id="web">
    <form action="producten.php" method="get"><!-- dit laten staan! -->
<?php 
$producten = array("Appels", "Melk", "Noodles", "Energydrank", "Croissant", "Banaan", "Sinaasappel", "Mandarijn", "Tomaat", "Gesneden brood");
$prijs = array("0,25", "1,25", "1,30", "0,44", "0,35", "1,00", "0,50", "0,75", "1,60", "1,90")
?>
    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <tr>
                <td>0</td>
                <?php echo "<td>$producten[0] </td>"; ?>
                <?php echo "<td>$prijs[0] </td>"; ?>
            </tr>
            <tr>
                <td>1</td>
                <?php echo "<td>$producten[1] </td>"; ?>
                <?php echo "<td>$prijs[1] </td>"; ?>
            </tr>
            <tr>
                <td>2</td>
                <?php echo "<td>$producten[2] </td>"; ?>
                <?php echo "<td>$prijs[2] </td>"; ?>
            </tr>
            <tr>
                <td>3</td>
                <?php echo "<td>$producten[3] </td>"; ?>
                <?php echo "<td>$prijs[3] </td>"; ?>
            </tr>
            <tr>
                <td>4</td>
                <?php echo "<td>$producten[4] </td>"; ?>
                <?php echo "<td>$prijs[4] </td>"; ?>
            </tr>
            <tr>
                <td>5</td>
                <?php echo "<td>$producten[5] </td>"; ?>
                <?php echo "<td>$prijs[5] </td>"; ?>
            </tr>
            <tr>
                <td>6</td>
                <?php echo "<td>$producten[6] </td>"; ?>
                <?php echo "<td>$prijs[6] </td>"; ?>
            </tr>
            <tr>
                <td>7</td>
                <?php echo "<td>$producten[7] </td>"; ?>
                <?php echo "<td>$prijs[7] </td>"; ?>
            </tr>
            <tr>
                <td>8</td>
                <?php echo "<td>$producten[8] </td>"; ?>
                <?php echo "<td>$prijs[8] </td>"; ?>
            </tr>
            <tr>
                <td>9</td>
                <?php echo "<td>$producten[9] </td>"; ?>
                <?php echo "<td>$prijs[9] </td>"; ?>
            </tr>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je: </p>
    <p>je bent <?php getAge(); ?> je korting is: <?php getKorting();?></p>

    </form><!-- dit laten staan! -->
</div>
  </body>
</html>