<?php
$title = 'GET Input';

include('./../inc/header.php');
require_once('./../inc/functions.php');

//dangerouse in this way, bcs of XSS (cross site scripting = user can scripts in URL):
// $category = $_GET['category']; //GET = super global
// $limit = $_GET['limit'];

$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT); //if it is not integer, it returns false
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT); //filters: https://www.php.net/manual/en/filters.php

if($category == false){
    $category = 1;
}

if($limit == false){
    $limit = 10
}

// die(); //=it stops
?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">GET input</h1>
        </div>
      </div>
      <div class="row">
      
      Showing category: <?=$category;?> & Limit: <?=$limit;?>

      </div>
    </div>
<?php include('./../inc/footer.php'); ?>