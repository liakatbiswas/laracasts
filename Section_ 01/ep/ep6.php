<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Laracasts</title>
  </head>

  <body>
    <h1>Recommended Books</h1>

    <?php
$books = [
 "Do Androids Dream of electric Sheep",
 "The Langoliers",
 "Hail Mary",
]?>
    <ul>
      <?php foreach ($books as $book): ?>
      <!-- <li><?php //echo $book; ?></li> -->
      <li><?=$book?></li>
      <?php endforeach;?>
    </ul>

    <ul>
      <?php foreach ($books as $book):
 echo "<li>" . $book . "</li>";
endforeach;?>
    </ul>

    <ul>
      <?php foreach ($books as $book):
 echo "<li>$book</li>";
endforeach;?>
    </ul>

  </body>

</html>