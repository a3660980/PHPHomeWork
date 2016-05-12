<?php
$id = $_POST['id'];
$name=$_POST['name'];
$tel=$_POST['tel'];
$db=Datebase::initDB();
$sql = "UPDATE student SET name=:name , tel=:tel WHERE id=:id";
$stmt = $db->prepare($sql);
$reslt = $stmt->execute(array(':name' =>$name , ':tel'=>$tel , ':id'=>$id ));
if ($reslt > 0) {
    echo "執行成功";
} else {
    echo "執行失敗";
}
header("Location: ./index.php");
?>