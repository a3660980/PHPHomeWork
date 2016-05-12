<?php 
	require("mysql.php");
	$func="show_index_page.php";
	if(!empty($_POST['func'])) {
		$func=$_POST['func'];
	}
	switch ($func) {
		default:
		case 'show_index_page.php':
			require("show_index_page.php");
			break;
		case 'show_insert_page.php':
			require("show_insert_page.php");
			break;
		case 'do_insert_page.php':
			require("do_insert_page.php");
			break;
		case 'show_update_page.php':
			require("show_update_page.php");
			break;
		case 'do_update_page.php':
			require("do_update_page.php");
			break;
		case 'show_delete_page.php':
			require("show_delete_page.php");
			break;
		case 'do_delete_page.php':
			require("do_delete_page.php");
			break;
		
	}

?>