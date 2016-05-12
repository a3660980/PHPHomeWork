<?php

$no = $_POST['no'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$db=Datebase::initDB();
$sql = "INSERT INTO `student`(`id`, `no`, `name`, `tel`) VALUES (null,:no,:name,:tel)";
$stmt = $db->prepare($sql);
$reslt=$stmt->execute(array(':no' => $no ,':name' => $name , ':tel' => $tel , ));
if ($reslt > 0) {
    echo "執行成功";
} else {
    echo "執行失敗";
}

header("Location: ./index.php");
?>