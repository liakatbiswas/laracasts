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

function filter($items, $fn)
{
 $filterBooks = [];
 foreach ($items as $item) {

  if ($fn($item)) {
   $filterBooks[] = $item;
  }

 }
 return $filterBooks;
}

$filterBooks = array_filter($books, function ($book) {
 return $book['releaseYear'] >= 2010;
});

// Index File
require 'index-view.php';