<<?php 
$db = new PDO('mysql:host=localhost;dbname=house;charset=utf8mb4', 'root', '');

$now = date('Y-m-d');
$query="UPDATE flat  SET status = '".$_POST['val']."', time = '".$now."' WHERE flat.flat_id = '".$_POST['user_id']."'";
$query1="UPDATE sale  SET status = '".$_POST['val']."' WHERE sale.flat_id = '".$_POST['user_id']."'";
$stmt=$db->query($query);
$stmt=$db->query($query1);

if ($query&&$query1) {
	echo "success";
}
 ?>