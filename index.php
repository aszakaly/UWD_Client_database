<?php
session_start();

include('includes/functions.php');

/*If login form was submitted*/
if (isset($_POST['login'])) {
//    create variables
//    wrap data with validate function
    $formEmail = validateFormData($_POST['email']);
    $formPassword = validateFormData($_POST['password']);

    //Connect to database
    include('includes/connection.php');

    //create query
    $query="SELECT name, password FROM users WHERE email='$formEmail'";


    //store the result
    $result = mysqli_query($conn, $query);

    //verify

    if(mysqli_num_rows($result)>0){
        //store basic user data and variables
        while ($row = mysqli_fetch_assoc($result)){
            $name       =  $row['name'];
            $hashedPass =  $row['password'];
        }

        //verify the hashed password

        if(password_verify( $formPassword,$hashedPass)){

            //correct login details!
            //store data is SESSION variables
            $_SESSION['loggedInUser']=$name;

            header("Location: clients.php");
        } else {//hashed pass did not verify
            //error message
            $loginError= "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
        }

    } else { //no results in database
        //error message
        $loginError= "<div class='alert alert-danger'>No such user in database. Please try again. <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
}

//close mysql connection
mysqli_close($conn);

include('includes/header.php');

//$password = password_hash("kungfu85", PASSWORD_DEFAULT);
//echo $password;

?>
    <!--Login form
    ========================================================================-->


<h1>Client Address Book</h1>
<p class="lead">Log into your account.</p>

<?php echo $loginError; ?>

<form class="form-inline" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ; ?>" method="post">
    <div class="form-group">
        <label for="login-email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="login-email" placeholder="Email" name="email" value="<?php echo $formEmail; ?>">
    </div>
    <div class="form-group">
        <label for="login-password" class="sr-only">Password</label>
        <input type="password" class="form-control" id="login-password" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

<?php
include('includes/footer.php');
?>
