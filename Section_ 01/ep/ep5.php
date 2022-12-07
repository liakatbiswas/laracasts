<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Laracasts</title>
    <style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
    </style>
  </head>

  <body>

    <?php
$name = "Dark Matter";
$read = true;

if ($read) {
 $message = "You hoave read $name";
} else {
 $message = "You hoave NOT read $name";
}

?>

    <h1>
      <?php echo $message ?>
      <br />
      <?=$message?>
    </h1>


  </body>

</html>