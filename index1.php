<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP FINAL</title>
</head>
<body>
<?php
	class PostOffice
	{
		function mailFilter(){
			$f = fopen("string.txt","r");
			while (!feof($f)) {
				$str = fgets($f);
				echo $str."<br/>";
			}
			fclose($f);
		}
		function mailRegex(){
			$f = fopen("string.txt","r");
			while (!feof($f)) {
				$str = fgets($f);
				$out = preg_replace("/\W/", "", $str);
				echo $out."<br/>";
			}
			fclose($f);
		}
		function spiltroad(){
			$f = fopen("road.txt","r");
			$len = 0;
			$r = array();
			while (!feof($f)) {
				$str = fgets($f);
				$city_pos = mb_strripos($str, "市", 0, "utf-8");
				$dist_pos = mb_strripos($str, "區", 0, "utf-8");
				$road_pos = mb_strripos($str, "路", 0, "utf-8");
				$road_len = $road_pos-$dist_pos;
				$out = mb_substr($str, $dist_pos+1, $road_len, "utf-8");
				array_push($r, $out);
				$len += 1;
			}
			for ($i=0;$i<$len;$i+=1){
				echo $r[$i]."<br/>";
			}
			fclose($f);
		}
	}
	$test = new PostOffice;
	$test->mailFilter();
	echo "----------<br/>";
	$test->mailRegex();
	echo "----------<br/>";
	$test->spiltroad();
?>
</body>
</html>
