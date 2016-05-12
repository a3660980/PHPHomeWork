<?php
$id = $_POST['id'];

$db=Datebase::initDB();
$sql = "DELETE FROM student WHERE id=:id";
$stmt = $db->prepare($sql);
$reslt = $stmt -> execute(array(':id' =>$id , ));
if ($reslt > 0) {
    echo "執行成功";
} else {
    echo "執行失敗";
}
header("Location: ./index.php");
?>