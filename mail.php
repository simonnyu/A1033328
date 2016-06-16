<?php
	if(isset($_POST['sender'])){
		require_once('../PHPMailer/PHPMailerAutoload.php');
		$mail_from = $_POST['sender'];
		$mail_adrs = $_POST['receiver'];
		$mail_sub = $_POST['subt'];
		$mail_cont = $_POST['cont'];
		$mail= new PHPMailer();                          //建立新物件
		$mail->IsSMTP();                                    //設定使用SMTP方式寄信
		$mail->SMTPAuth = true;
		$mail->Host = "smtp.gmail.com";             //Gamil的SMTP主機
		$mail->Port = 587;                                 //Gamil的SMTP主機的埠號(Gmail為465)。
		$mail->CharSet = "utf-8";                       //郵件編碼
		$mail->Username = ""; //Gamil帳號
		$mail->Password = "";                 //Gmail密碼
		$mail->From = "";        //寄件者信箱
		$mail->FromName = $mail_from;                  //寄件者姓名
		$mail->Subject = $mail_sub; //郵件標題
		$mail->Body = $mail_cont; //郵件內容
		$mail->IsHTML(true);                             //郵件內容為html
		$mail->AddAddress("$mail_adrs");            //收件者郵件及名稱
		if(!$mail->Send()){
			echo "Error: " . $mail->ErrorInfo;
		}else{
			echo "信件已成功寄出~~~";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP FINAL</title>
</head>
<body>
	<div align="center">
		<form method="post">
			<table>
				<tr>
					<td align="right">寄件人</td>
					<td align="left"><input type="text" name="sender" required></input></td>
				</tr>
				<tr>
					<td align="right">收件人信箱</td>
					<td align="left"><input type="text" name="receiver" required></input></td>
				</tr>
				<tr>
					<td align="right">主旨</td>
					<td align="left"><input type="text" name="subt" required></input></td>
				</tr>
				<tr>
					<td colspan="2">信件內容</td>
				</tr>
				<tr>
					<td></td>
					<td><textarea name="cont" required></textarea></td>
				</tr>
			</table>
			<p align="center"><input type="submit" value="送出"></input></p>
		</form>
	</div>
</body>
</html>