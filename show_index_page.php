<?php
$db=Datebase::initDB();
$msg='<form action="index.php" method="POST">';
$msg.='<button type=submit value="show_insert_page.php" name="func">新增</button>';
$msg.='<button type=submit value="show_update_page.php" name="func">修改</button>';
$msg.='<button type=submit value="do_delete_page.php" name="func">刪除</button>';
$msg.='<table>';
$sql="SELECT * FROM student";
$reslt=$db->query($sql);
	foreach ($reslt->fetchAll() as $row) {
			$msg .="<tr>";
            $msg .='<td><input type="radio" name="id" value="'.$row['id'].'"/></td><td>' . $row['id'] . "</td><td>" . $row['no'] . "</td><td>" . $row['name'] . "</td><td>" . $row['tel'] . "</td></tr>";
        }
        $msg.='</table></form>';
        echo $msg;

?>
