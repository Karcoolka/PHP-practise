<?php
$title = 'POST Input'; //only way is with form in PHP

include('./../inc/header.php');
require_once('./../inc/functions.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email ==false){
        $status = "Please, enter valid address";
    }else{
            echo $_POST['email']; //it shows only email after submition
            output($_POST);// show everything in array (lemail and password)
        }
    }
    
//in case of more forms at page:
// if(isset($_POST['login'])){//name for form
//     output($_POST);
// }

$_POST['email']; //email as in input name attribute
?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">POST input</h1>
        </div>
      </div>
      <div class="row">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login">
            </div>
        </form>
      </div>
      <div class="row">
        <?php
        if(isset($status)){
            echo $status;
        }
        ?>
      </div>
    </div>
<?php include('./../inc/footer.php'); ?>