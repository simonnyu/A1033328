<?php
	require_once("config.php");
	$code = 0;
	if($_GET['city']=='Taipei'){
		$code = 1;
	}elseif ($_GET['city']=='Kaohsiung') {
		$code = 2;
	}elseif ($_GET['city']=='Tainan') {
		$code = 3;
	}
	$sql = "SELECT area_name FROM area WHERE city_no = '$code'";
	$res = mysqli_query($conni, $sql);
	$file_name = $_GET['city']."_area";
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename='.$file_name.'.csv');
	$output = fopen('php://output', 'w');
	fputcsv($output, array("區域"));
	while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
		fputcsv($output, $row);
	}
?>