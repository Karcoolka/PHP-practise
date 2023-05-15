<?php
$title = 'includes';

//function INCLUDE
include('./../inc/header.php'); //includes code from another file

//function REQUIRE (same like include, but give us an error if file does not exists)
// require('./../inc/functions.php');

require_once('./../inc/functions.php'); //it require file just once, no matter how many times has been require_once called in included files

$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gipson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender']    
];

$guitar_names = pluck($guitars, 'name');
?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"></h1>
        </div>
      </div>
      <div class="row">
      
      <?php
      output($guitar_names);
      ?>

      </div>
    </div>
<?php include('./../inc/footer.php'); ?>