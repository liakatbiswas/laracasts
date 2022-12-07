<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Laracasts</title>
  </head>

  <body>

    <h1>
      <?php

echo "Hello" . " World!";
echo "<br/>";
echo "Hello" . " " . "World!";
echo "<br/>";

$greeting = "Hello";

echo $greeting . " everyone.";
echo "<br/>";
echo "{$greeting} everyone";
echo "<br/>";

// The sprintf() function writes a formatted string to a variable.
$concateString = sprintf("%s everyone", $greeting);
echo $concateString;

?>
    </h1>


  </body>

</html>