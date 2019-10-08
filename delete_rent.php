<?php
//DB Connection
$db = new PDO('mysql:host=localhost;dbname=house;charset=utf8mb4', 'root', '');

$query="DELETE FROM flat WHERE flat_id = ".$_GET['flat_id'];

$result=$db->exec($query);

 header("location:show_rent.php");

if($result){
    echo "Data has been deleted successfully";
}else{
    echo "There is some error in your process";
}


