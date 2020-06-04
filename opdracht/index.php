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
    <form action="index.php" method="get"><!-- dit laten staan! -->

    <p style="text-align:center;font-size:24px;">Op deze website kun je checken welk datatype je hebt ingevoerd.</p>
    <P style="text-align:center">Vul hieronder een getal, een decimaal, een tekst of de tekst true/false in en klik op check!</p> 
    <input style="margin-left:43%;" type="text" name="input"><!-- dit laten staan! -->
    <button type="submit" name="submit">Check</button><!-- dit laten staan! -->
    <p style="text-align:center">Het datatype van de waarde: <?php getInput(); ?> </p>

    </form><!-- dit laten staan! -->
    </div>
  </body>
</html>