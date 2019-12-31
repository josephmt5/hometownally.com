<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>day View</title>
	
	
	
	
	
    <meta name="google-signin-client_id" content="184777192547-tena6f3cfd6rlipnoi3kj40mucheapsj.apps.googleusercontent.com">
   
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	

	<script type="text/javascript" src="/auth.js"></script>
	
	<script src="../../auth.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style>
	html, body
		{
			background-color: darkred;
		}
		table
		{
			background-color: white;
		}
		
	</style>
	
	
	
	
	
	
</head>

<body>
	<div hidden=true class="g-signin2" data-onsuccess="isSignedinAuth"></div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://control.apptcenter.com">Control</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link" href="">My Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<? echo site_url("tech/claim"); ?>">Claim<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<? echo site_url("tech/admin"); ?>">Operator options</a>
      </li>
		<li class="nav-item">
        <a onclick="signOut();" class="nav-link" href="http://control.apptcenter.com">LogOut</a>
      </li>
    </ul>
    <span class="navbar-text">
      
    </span>
  </div>
</nav>
	signed in as:
		
		<p><? echo $this->session->userdata("activeName"); ?></p>
	<?
	$user = "josephmt5";
$pass = "thompson01";
$db = new PDO('mysql:host=198.71.225.53:3306;dbname=apptcenterdb', $user, $pass); 
	?>
	
	<table class="table-striped" border="1">
	<thead>
    	<tr>
        	<th>name</th>
            <th>email</th>
			<th>Phone</th>
            <th>address</th>
			<th>state</th>
			<th>zip</th>
			<th>date</th>
			<th>time</th>
			<th></th>
			<th></th>
        </tr>
    </thead>
    <tbody >
		<form method=post>
<?php
		
			
	

	$email = trim($this->session->userdata('activeEmail'));
		
			
		
$query = $db->query("SELECT users.name, users.email, users.phone, users.address, users.state, users.zip, datetime.date, datetime.techemail, datetime.time, datetime.finished, datetime.claimed, datetime.paid, datetime.dateid FROM users JOIN datetime ON users.userid=datetime.userid  WHERE datetime.techemail ='". $email."' AND ( datetime.finished=0 OR datetime.paid=0 ) ORDER BY datetime.date DESC"); 

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['phone']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$row['state']."</td>";
	echo "<td>".$row['zip']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".$row['time']."</td>";
	echo "<td>" ;
		if($row['finished']=='0')
			{echo "<input type=submit value=FINISH name='".$row['dateid']."'></input>";}
		else { echo "FINISHED";} 
		echo "</td>";
	echo "<td>" ;
	if($row['paid']=='0')
		{echo "<input type=submit value=PAID name='".$row['name']."'></input> ";}
	else
	{echo "PAID";}
	echo "</td>";
	echo "</tr>";
	
	
	if ( isset( $_POST[$row['dateid']]) )
	{
		//print($row['dateid']);
		$dateid = $row['dateid'];
		$claim = $db->prepare("UPDATE `datetime` SET finished=1 WHERE dateid='$dateid'");
			$claim->execute();
		header( 'Location: http://control.apptcenter.com/index.php/tech/day');

	}

	
	if ( isset( $_POST[$row['name']]) )
	{
		
		//print($row['dateid']);
		$dateid = $row['dateid'];
		$claim = $db->prepare("UPDATE `datetime` SET paid=1 WHERE dateid='$dateid'");
			$claim->execute();
		header( 'Location: http://control.apptcenter.com/index.php/tech/day');

	}
	
	
	
	
	
}
	
	?>
	
	
	</form>
	
	
</body>
</html>