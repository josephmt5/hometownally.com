<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email</title>
	<style>
		html, body
		{
			background-color: black;
			color:green;
			
		}
	</style>
</head>

<body>
	
	<br>
	
	<form method=post >
		<h2>
		from email: <br><input type=text name=femail  ></input><br><br>
		from name: <br><input type=text name=fname  ></input><br><br>
	     to email:<br><input type=text name=temail  ></input><br><br>
		subject:<br><input type=text name=subj  ></input><br><br>
		message:<br><textarea rows=10 cols="40" type=text name=mess></textarea><br><br>
	</h2>
	<input type=submit name=submit value=Send></input>
	</form>
	
	
	
	
	
	
	
	
	
	<?
if(isset($_POST['submit']))
{
	$subject=$_POST['subj'];
	$message=$_POST['mess'];
	$this->email->from($_POST['femail'], $_POST['fname']);
		$this->email->to($_POST['temail']);

		$this->email->subject($subject);
		$this->email->message($message);
	
	
	
		$this->email->send();
	$message = "Message Sent";
			echo "<script type='text/javascript'>alert('$message');</script>";
	$this->session->sess_destroy();
        redirect("Welcome/index");
	
}
	?>
</body>
</html>