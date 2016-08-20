<!DOCTYPE html>
<html>
<head>
	<title>smsMasking</title>
</head>
<body>
	<h1>smsMasking with PHP</h1>
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="sender">Sender name : </label></td>
				<td><input type="text" id="sender" name="sender"></td>
			</tr>
			<tr>
				<td><label for="number">Number : </label></td>
				<td><input type="number" id="number" name="number"></td>
			</tr>
			<tr>
				<td><label for="message">Message : </label></td>
				<td><textarea id="message" name="message"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">Send Message</button></td>
			</tr>
		</table>
	</form>
	<p><?php
if($_SERVER['REQUEST_METHOD']=='POST') {

	include('smsMasking.class.php');
	$smsMasking = new smsMasking();
	$send=$smsMasking->send($_POST['sender'], $_POST['number'], $_POST['message']);
	if($send['status']==false) {
		echo '<font color="darkred">'.$send['error'].'</font>';
	} else {
		echo '<font color="darkgreen">'.$send['success'].'</font>';
	}

}
?></p></body>
</html>