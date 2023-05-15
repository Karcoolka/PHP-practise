<?php
$title = 'scope';

//---------------------------------------------------------------
$greeting = 'hello, world'; //global
$greeting2 = 'hello, world for the second time'; //global
function greet() {
    global $greeting, $greeting2;
    return $greeting . ' ' . $greeting2;
}
$result = greet();
//---------------------------------------------------------------
$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gipson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender']    
];

$guitar_name = array_column($guitars, 'name'); //of manufacturer!

function output($value){
    echo '<pre>';
    print_r($value) ;
    echo '</pre>';
}

//OR-----------------------------------------------------------------

function pluck($arr, $key){
    $result = array_map("return_name", $arr);
    return $result;
}

function return_name($item){
    return $item['name'];
}

$guitar_names = pluck($guitars, 'name');
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
          <h1 class="mt-5"></h1>
        </div>
      </div>
      <div class="row">
      <?= $result ?>
      
      <?php
      output($guitar_names);
      ?>

      </div>
    </div>
  </body>

</html>