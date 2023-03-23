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
    $this->setTitle($_title);
    $this->setPoster($_poster);
    $this->setAuthor($_author);
  }

  public function setTitle($title) {
    if(!is_string($title)|| $title === "") return false;
    $this->title = $title;
  }

  public function setPoster($poster) {
    if(!is_string($poster)|| $$poster === "") return false;
    $this->poster = $poster;
  }

  public function setAuthor($author) {
    if(!is_string($author)|| $$author === "") return false;
    $this->author = $author;
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