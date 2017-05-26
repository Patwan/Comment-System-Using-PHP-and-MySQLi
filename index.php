<?php
	//date_default_timezone_set()- Sets the timezone you want to get the date in
	date_default_timezone_set('Africa/Nairobi');
	
	//Include database connection
	include 'db.php';
	
	//Include functins page file
	include 'comments.php';
	
	//Starts the session
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- The form belows allow the user to login and logout before updating or deleting any comments in the website-->
<?php
	echo "<form method='post' action='".getLogin($db)."' >
		<input type='text' name='uid'>
		<input type='password' name='pwd'>
		<button type='submit' name='loginSubmit'> LogIn </button>
	</form>";
	echo "<form method='post' action='".userLogout()."' >
		<button type='submit' name='logoutSubmit'> LogOut </button>
	</form>";
	
	//This code checks if user is logged in or logout
	if(isset($_SESSION['id'])){
		echo"You are logged in!";
	}
	else{
		echo"You are NOT logged in!";
	}
?>

<br> <br>

<!-- Video to be displayed on the browser-->
<video width="320" height="240" controls>
	<!-- Create a folder named video in your root directory, then add a video file called video -->
	<source src="video/video.mp4" type="video/mp4">
</video> <br>

<!--date()- Displays the date, Y-m-d(Year,Month, Date) H:i:s(Hour, Minute, Second) -->
<?php
//Inorder to see the form inside the PHP code, use echo"";
echo "<form method='post' action='".setComments($db)."'>
		<input type='hidden' name='uid' value='Anonymous'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea name='message'></textarea><br>
		<button type='submit' name='commentSubmit'> Comment </button>
	  </form> <br>";

//The function below is used to get comments from the database
getComments($db);
?>
</body>
</html>