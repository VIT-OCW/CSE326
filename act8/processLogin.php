<?php 
 $username = $_POST['username'];
 $password = $_POST['password'];

 mysqli_connect('localhost', 'scse', 'scse', 'test');

 $sqlGetusername = "SELECT user_name FROM user_profile";
 $resGetusername = mysqli_query($con, $sqlGetusername);

 $found = 0;
 while(($rowGetusername = mysqli_fetch_array($resGetusername))
 {
 	if ($username = $rowGetusername['user_name']) {
 		$found = 1;
 		break;
 	}
 }
 if ($found == 1) {
 	$sqlGetPassword = "SELECT password FROM user_profile WHERE user_name=".$username.";";
 	$resGetPassword = mysqli_query($con, $sqlGetPassword);
 	$rowGetpassword = mysql_fetch_array($resGetPassword);

 	if(md5($password == $rowGetpassword['password'])) {
 		header('location: profile.php');
 	}
 	else {
 		header('location: error.php?errorcode=123');
 	}
 }
 else {
 	header('location: error.php?errorcode=456');
 }


 ?>