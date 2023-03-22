<?php

class Movie {
public $title;
public $abstract;
public $author;
}

echo $movie->getFullDescription();

$movies = [
    new movie[
      $title: "Fuga per la vittoria",
      $abstract: "lorem ipsum dolor sit"
      $author: "John Uston"
    ],
    new movie("Matilda sei mitica", "abstract", "Danny De Vito")

];

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MOVIES</title>
</head>
<body>

<?php foreach($movies as $movie) : ?>
  <h3><?= $movie->title ?></h3>
  <p><?= $movie->getAbstract(100) ?></p>
  <small><? $movie->author ?></small>
  <hr>
  <?php endforeach; ?>
</body>
</html>