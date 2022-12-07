<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTf-8">
    <title>Laracasts</title>
  </head>

  <body>
    <ul>
      <?php foreach ($filterBooks as $book): ?>
      <li>
        <a href="<?=$book['purchaseUrl'];?>">
          <?=$book['name'];?>(<?=$book['releaseYear']?>) - By: <?=$book['author']?>
        </a>
      </li>
      <?php endforeach;?>
    </ul>

  </body>

</html>