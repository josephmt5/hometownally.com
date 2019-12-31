<!doctype html>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <meta name="google-signin-client_id" content="184777192547-tena6f3cfd6rlipnoi3kj40mucheapsj.apps.googleusercontent.com">
   
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	

	<script type="text/javascript" src="/auth.js"></script>
	
	<script src="../../auth.js"></script>
	
	<style>
		html, body
		{
			background-color: darkred!important; //set to color
 			 background-image: url("https://preview.ibb.co/dizdck/beach2.jpg") 
				 color: white;
		}
		input
		{
			margin-left: 10px;
		}
		input
		{
			
		}
	
	</style>
<head >
	
<meta charset="utf-8">
<title>ApptCenter</title>
	
	
	
</head>

<body >
	
	
	
	<nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://control.apptcenter.com">CONTROL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://control.apptcenter.com">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://control.apptcenter.com/index.php/welcome/login">Login</a>
      </li>
      <li class="nav-item active">
        <a href="http://control.apptcenter.com/schedule" class="nav-link">Schedule</a>
      </li>
    </ul>
    <span class="navbar-text">
      
    </span>
  </div>
</nav>
	signed in as:
		
		<p><? echo $this->session->userdata("activeName"); ?></p>
	<? echo validation_errors(); ?>
	
	<br>
	<font size="6" color="white">
		<form action="" method="post">
	<section id=area1>
		NAME:<input name="name" height="20%" type="text"><br><br>
		EMAIL:<input name=email height="20%" type="text"><br><br>
	</section>
	<section id=area2>
		TEXT NUMBER:<input name=phone height="20%" type=number><br><br>
		ADDRESS:<input name=address height="20%" type="text"><br><br>
		CITY:<input name=city height="20%" type="text"><br><br>
		STATE:<select name="state">
  		<option value="GA">GA</option>
		 </select> 
		<br><br>
		ZIP:<select name="zip">
  <option value="30534">30534</option>
  <option value="30533">30533</option>
  <option value="30041">30041</option>
  <option value="30040">30040</option>
</select> <br><br>
		PROBLEM:<input name= problem  height="20%" type="text"><br><br>
	</section>
	<section id=area3>
		<? $effectiveDate=date('Y-m-d');
		$effectiveDate = strtotime("+3 months", strtotime($effectiveDate)); ?>
		DATE:<input id=date  name=date height="20%" type="date" value="<?php echo date('Y-m-d');?>"min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',$effectiveDate);?>"><br><br>
	</section>
	<section id=area4>
		TIME:
		<select id= time name="time">
			<option value="8a-10a">81-10a</option>
 <?
			$user = "josephmt5";
		$pass = "thompson01";
		$db = new PDO('mysql:host=198.71.225.53:3306;dbname=apptcenterdb', $user, $pass);
			/*
		$query = $db->query("SELECT time FROM windows");
			while($row = $query->fetch(PDO::FETCH_ASSOC))
		{
		$query1 = $db->query("SELECT  count(*) FROM datetime WHERE day='".$date."' AND time='".$row['time']. "'");
		$row1 = $query1->fetchColumn();
				if($row1>2){}
				else{
  			echo"<option value=".$row['time'].">".$row['time']."</option>";
				}
			
		}	
			*/
?>
			
</select> 
	</section>
		
		<br>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="image" name="submit" width="20%" src="../../images/Screenshot (5).png">
			</form>
		</font>
		
	
<?php	
	$user = "josephmt5";
		$pass = "thompson01";
		$db = new PDO('mysql:host=198.71.225.53:3306;dbname=apptcenterdb', $user, $pass);

$errors;
	
	

//https://www.howtogeek.com/howto/27051/use-email-to-send-text-messages-sms-to-mobile-phones-for-free/	
	

		
		
				
		

?>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	
</body>
</html>
