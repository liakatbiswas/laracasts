<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Laracasts</title>
  </head>

  <body>
    <h1>Recommended Books</h1>


    <?php $books = [

 [
  'name'        => 'Do Androids Dream of electric Sheep',
  'author'      => 'Philip K. Dick',
  'purchaseUrl' => 'http://example.com',
 ],
 [
  'name'        => 'The Langoliers',
  'author'      => 'Andy Weir',
  'purchaseUrl' => 'http://example.com',
 ],
 [
  'name'        => 'Hail Mary',
  'author'      => 'Unknow Person',
  'purchaseUrl' => 'http://example.com',
 ],

]
?>

    <ol>
      <?php foreach ($books as $book): ?>
      <li><a href="<?=$book['purchaseUrl'];?>"><?=$book['name'];?></a></li>
      <?php endforeach;?>
    </ol>


  </body>

</html>