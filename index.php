<?php
include('includes/header.php');
?>
    <!--Login form
    ========================================================================-->


        <h1>Client Address Book</h1>
        <p class="lead">Log into your account.</p>

        <form class="form-inline">
            <div class="form-group">
                <label for="login-email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="login-email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="login-password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="login-password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

<?php
include('includes/footer.php');
?>
