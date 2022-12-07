<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Laracasts</title>
    <style>
    a {
      text-decoration: none;
    }
    </style>
  </head>

  <body>
    <h1>Recommended Books</h1>


    <?php $books = [

 [
  'name'        => 'Do Androids Dream of electric Sheep',
  'author'      => 'Philip K. Dick',
  'purchaseUrl' => 'http://example.com',
  'releaseYear' => '2000',
 ],
 [
  'name'        => 'The Langoliers',
  'author'      => 'Andy Weir',
  'purchaseUrl' => 'http://example.com',
  'releaseYear' => '2010',
 ],
 [
  'name'        => 'Hail Mary',
  'author'      => 'Andy Weir',
  'purchaseUrl' => 'http://example.com',
  'releaseYear' => '2012',
 ],

];

function filterByAuthor($books, $author)
{
 $filterBooks = [];

 foreach ($books as $book) {

  if ($book['author'] === $author) {
   $filterBooks[] = $book;
  }

 }
 return $filterBooks;

}

?>

    <ul>
      <?php foreach (filterByAuthor($books, 'Andy Weir') as $book): ?>

      <li>
        <a href="<?=$book['purchaseUrl'];?>">
          <?=$book['name'];?>(<?=$book['releaseYear']?>) - By: <?=$book['author']?>
        </a>
      </li>

      <?php
endforeach;?>
    </ul>





  </body>

</html>