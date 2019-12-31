<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
	<style>
	html, body
		{
			background-color:darkred;
		}
		
	</style>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <meta name="google-signin-client_id" content="184777192547-tena6f3cfd6rlipnoi3kj40mucheapsj.apps.googleusercontent.com">
   
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="/auth.js"></script>

	
<style>
	.content
		{
			align-content: left;
			float: right;
			width:78%;
			
		}
		.menu
		{
			align-content: left;
			float: left;
			width:20%;
			height: 100%;
			background-color: white;
			
		}
		html, body
		{
			background-color: darkred;
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
      <li class="nav-item ">
        <a class="nav-link" href="<? echo site_url("tech/day"); ?>">My Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<? echo site_url("tech/claim"); ?>">Claim<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="">Operator options</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" onclick="signOut();" href="http://control.apptcenter.com/">LogOut</a>
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
			
	<div class="mainContent">
		<div class="menu"><?php $this->load->view("adminmenu");?></div>
		<div class="content"><?php $this->load->view($view); ?></div>
	</div>
</body>
</html>