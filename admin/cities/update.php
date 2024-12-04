<?php
     require '../../config.php';
     require BLA.'inc/header.php';
     require BL.'functions/validation.php';
?>



<?php

    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $city_id = $_POST['city_id'];
        

        if (checkEmpty($name) && checkLess($name,3) ){

            $row = getRow('cities','city_id',$city_id);
    
            if($row)
            {
                $sql = "UPDATE cities SET `city_name` = '$name' WHERE `city_id` = '$city_id'";
                $success_message = db_update($sql);
                header("refresh:2;url=".BURLA."cities");

            }else {
                $error_message= "Please Correct Data";
            }
            
            }
            else{
                $error_message= "Please Correct Data";
            }
        }
        
        require BL.'functions/messages.php';

    

?>




<?php require BLA.'inc/footer.php';  ?>
