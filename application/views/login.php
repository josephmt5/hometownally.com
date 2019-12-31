
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<style>
	html,body
		{
			background-image: url("../../images/giphy.gif");
    		background-repeat: repeat-y;
			-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
			color: green;
		}
		p
		{
			color: black;
		}
		section
		{
			background-color: black;
			align-content: center;
			align-items: center;
			width:25%;
			height:20%;
			margin-left: 35%;
			margin-top: 20%;
		}
	
	</style>

	

	</head>

	<body>
		
		<section>
			<br><br>
			<form method=post>
				<h3>
		UID&nbsp;&nbsp;&nbsp;&nbsp;<input type=password name=username></input><br><br><br>
		OTP&nbsp;&nbsp;&nbsp;&nbsp;<input type=password name=password></input>	<br><br><br>
			<input type=submit value=Enter name=enter></input><br>
		<p></p>
	
		</h3>
		</form>
		</section>
		<?
		if(isset($_POST['enter']))
		{
			if($_POST['username']=="alex" && $_POST['password']=="jones" )
			{
			$this->session->set_userdata('code', "%%@@#1trump%%@@#1");
		
		redirect("tech/email");
			}
			else{
				$message = "incorrect credentials";
			echo "<script type='text/javascript'>alert('$message');</script>";
       
			}
		}
			
	?>
		<br><br><br><br>
	
		
	</body>

</html>