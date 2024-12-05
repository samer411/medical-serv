<?php
require_once('../../functions/db.php');


$table = $_GET['table'];
$field = $_GET['field'];
$item_id = $_GET['item_id'];

$sql = "DELETE FROM `$table` WHERE `$field` = '$item_id'";

$result = deleteRow($sql);

if($result){
    $data['message'] = 'success';
}
else{
    $data['message'] = 'error';
}

echo json_encode($data);    