<?php

class Movie {
  public $title;
  public $poster;
  public $author;

  function __construct(
    string $_title,
    string $_poster,
    string $_author
  ) {
    $this->title = $_title
    $this->poster = $_poster
    $this->author = $_author
  }

  public function setTitle($title) {
    if(!is_string($title)|| $$title === "") return false;
    $this->title = $title;
  }


}

$movies = [
    new Movie ("Fuga per la vittoria", "lorem ipsum dolor sit", "John Uston"),
     
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