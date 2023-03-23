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
    if(!is_string($poster)|| $poster === "") return false;
    $this->poster = $poster;
  }

  public function setAuthor($author) {
    if(!is_string($author)|| $$author === "") return false;
    $this->author = $author;
  }

}



$movies = [
    new Movie ("Fuga per la vittoria", "https://portaledelnazismo.altervista.org/wp-content/uploads/2015/10/1b17.jpg", "John Uston"),
     
    new Movie ("Matilda sei mitica", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxuGhQmY5OmEwHeZBplYNtlzhkT09O1x50Cg&usqp=CAU", "Danny De Vito")
]


?>

<!DOCTYPE html>
  <html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <h1>Movies</h1>
        <div class="row-cols-3">
        <?php foreach($movies as $movie) : ?>
            <div class="col">
              <div class="card">
                <img src="<?= $movie->poster ?>" class="card-img-top" alt="">
                
                <h2 class="card-title"><?= $movie->title ?></h2>
                  
                <h3><?= $movie->author ?></h3>
                  <hr>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
    </div>

  </body>

</html>