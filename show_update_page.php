<?php
$id=$_POST['id'];


$db=Datebase::initDB();
$sql="SELECT name,tel FROM student WHERE id=$id";
$result=$db->query($sql);

foreach ($result->fetchAll() as $row) {
	$name=$row['name'];
	$tel=$row['tel'];
}

?>
<html>
<head>
</head>
<body>

	<form action="index.php" method="POST" >
		<input type="hidden" name="func" value="do_update_page.php"/>
		<input type="hidden" name="id" value="<?php echo $id; ?>"/><br>
		姓名：
		<input type="text" name ="name" value="<?php echo $name; ?>" /> <br>
		電話：
		<input type="text" name="tel" value="<?php echo $tel; ?>" /></br>
		<input type="submit" value="修改" />
		<input type="reset" value="重置" />
	</form>
	</body>
</html>