<?php
     require '../../config.php';
     require BLA.'inc/header.php';
     require BL.'functions/validation.php';
?>


<?php

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $row = getRow('cities','city_id',$_GET['id']);
    
    if($row)
    {
        $city_id = $row['city_id'];
    }
    else{
        header("location:".BURLA);
    }
}
else{
    header("location:".BURLA);
}

?>



<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="<?php echo BURLA.'cities/update.php' ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" value = "<?php echo  $row['city_name'] ?>">
                <input type="hidden" name = "city_id"  class="form-control" value = "<?php echo  $city_id ?>">
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>









<?php require BLA.'inc/footer.php';  ?>
