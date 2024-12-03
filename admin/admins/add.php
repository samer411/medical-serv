<?php
     require '../../config.php';
     require BLA.'inc/header.php';
     require BL.'functions/validation.php';
?>



    
<?php

    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];

        if (checkEmpty($name) and checkEmpty($email) and checkEmpty($password)){
            if(validEmail($email)){
                $newPassword = password_hash($password,PASSWORD_DEFAULT);
            }
            else{
                $error_message= "Please Correct Email";
            }
        }
        else{
            $error_message = "Please Fill All Fields";
        }
        require BL.'functions/messages.php';

    }

?>

    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="email" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>


<?php require BLA.'inc/footer.php';  ?>




   

