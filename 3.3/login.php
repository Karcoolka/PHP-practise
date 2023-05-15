<?php
session_start(); //at the every start of file
$title = 'POST Input';

require_once('./../inc/config.php');
require_once('./../inc/functions.php');

if(is_user_authenticated()){
    redirect('admin.php');
    die();
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password']; //validate!

//compare with data store (config.php)
    if(authenticate_user($email, $password)){
        $_SESSION['email'] = $email; //in session email is set up
        redirect('admin.php'); //redirection
        // header('Location: admin.php'); //redirection to... but we rather use the function above
        die(); //we are done with REQ
    }else{
        $status = 'The provided credentials does not work';
    }

    if($email == false){
        $status = "Please, enter valid address";
    }
}
    
include('./../inc/header.php');
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