<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">//alert("sdfsd");</script>
<body>
<?php
    include('indexDB.php');
//$db_handle = new DBController();


	$query ="SELECT * FROM state WHERE countryid = '" . $_POST["countryid"] . "'";
	$results = $conn->query($query);
?>
	<option value="">Select city</option>
<?php
	while($rs=$results->fetch_assoc()) {
?>
	<option value="<?php echo $rs["stateid"]; ?>"><?php echo $rs["city"]; ?></option>
<?php

}
?>
</body>
</html>
