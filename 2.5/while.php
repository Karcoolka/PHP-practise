<?php
$title = 'while Loop';

$favoriteGuitars = ['Vela', 'Explorer', 'Strat'];

$kvpGuitars = [ //kvp = key-value pairs
    'prs' => 'Vela',
    'gipson' => 'Explorer',
    'fender' => 'Strat'
];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/php-fundamentals.css" rel="stylesheet" />
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">My Favourite Guitars</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-striped">

            <?php
            $i = 0;

            //while (while true it is still counting, so it is neverending :)
            while($i < count($favoriteGuitars)){
                $guitar = $favoriteGuitars[$i];
                echo "<tr><td>$guitar</td></tr>";
            }
            ?>
        </table>
      </div>
    </div>
  </body>

</html>