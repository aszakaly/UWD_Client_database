<?php
session_start();

//if user is not logged in
if (!$_SESSION['loggedInUser']) {

    //send the user to login page
    header("Location: index.php");
}



include('includes/header.php');
?>


        <h1>Client Address Book</h1>
        <table class="table table-striped table-bordered">
           <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Address</th>
               <th>Company</th>
               <th>Notes</th>
               <th>Edit</th>
           </tr>
           <tr>
               <td>John Doe</td>
               <td>johndoe@email.com</td>
               <td>(123) 456-7890</td>
               <td>111 Address Street, Calgary, AB T1G 2KY</td>
               <td>Brightside Studios Inc.</td>
               <td>Usually pays early. He's awesome.</td>
               <td><a href="edit.php" type="button" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>
           </tr>
           <tr>
               <td>Jane Doe</td>
               <td>janedoe@email.com</td>
               <td>(123) 456-7890</td>
               <td>123a Address Street, Calgary, AB T1G 2KY</td>
               <td>Brightside Studios Inc.</td>
               <td>Nice lady. Pays in high fives though...</td>
               <td><a href="edit.php" type="button" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>
           </tr>
           <tr>
               <td colspan="7"><div class="text-center"><a href="add.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Client</a></div>
           </tr>

        </table>
<?php
include('includes/footer.php');
?>
