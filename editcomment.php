<?php
	//date_default_timezone_set()- Sets the timezone you want to get the date in
	date_default_timezone_set('Africa/Nairobi');
	
	//Include database connection
	include 'db.php';
	
	//Include functins page file
	include 'comments.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
	
<!--HTML code appearing inside PHP should be in single or double-quotation marks-->	
<!--Using single quotation marks in PHP makes the code execute faster-->
<!--Input type hidden means the code will not be viewable on the browser-->
<!--date()- Displays the date, Y-m-d(Year,Month, Date) H:i:s(Hour, Minute, Second) -->
<?php
	$cid= $_POST['cid'];
	$uid= $_POST['uid'];
	$date= $_POST['date'];
	$message= $_POST['message'];
			
echo "<form method='post' action='".editComments($db)."'>
		<input type='hidden' name='cid' value='".$cid."'>
		<input type='hidden' name='uid' value='".$uid."'>
		<input type='hidden' name='date' value='".$date."'>
		<textarea name='message'> ".$message." </textarea><br>
		<button type='submit' name='SubmitComments'> Edit </button>
	  </form> <br>";

?>
</body>
</html>