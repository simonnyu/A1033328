<?php
	if(isset($_GET['city'])){
		header("Content-Type:text/html; charset=utf-8");
		require_once("config.php");
		$code = 0;
		if($_GET['city']=='Taipei'){
			$code = 1;
		}elseif ($_GET['city']=='Kaohsiung') {
			$code = 2;
		}elseif ($_GET['city']=='Tainan') {
			$code = 3;
		}
		$sql = "SELECT * FROM area WHERE city_no = '$code'";
		$res = mysqli_query($conni, $sql);
		while($info = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$x = $info['area_name'];
			echo "<option value='$x'>$x</option>";
		}
	}
?>