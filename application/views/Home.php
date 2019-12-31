<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ApptCenter</title>
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <meta name="google-signin-client_id" content="184777192547-tena6f3cfd6rlipnoi3kj40mucheapsj.apps.googleusercontent.com">
   
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	

	<script type="text/javascript" src="/auth.js"></script>
	
	<script src="../../auth.js"></script>
	
	
	<style>
	html, body
		{
			background-color:darkred;
			color:white;
		}
	</style>
	
	</head>
      
	
	
	

<!--/////////////////////////////////////////////////////////////////////////////////////-->
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Control</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://control.apptcenter.com/index.php/welcome/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<? $name = $this->session->userdata('activeName'); echo site_url("welcome/schedule") ?>"><?
	
	if(!empty($name))
		
   {
	echo "Schedule";

   }
	?></a>
      </li>
		<li class="nav-item">
        <a class="nav-link"  href="<? $name = $this->session->userdata('activeName'); echo site_url("welcome/logout") ?>"><?
	
	if(!empty($name))
		
   {
	echo "Logout";

   }
	?></a>
      </li>
		
    </ul>
    <span class="navbar-text">
      
    </span>
  </div>
</nav>
	<?
	
	if(!empty($name))
		
   {
	echo "logged in as ".$name;

   }
	?>
	<a href="http://control.apptcenter.com/index.php/welcome/schedule">
	<img  width="100%" src="../../images/Screenshot (5).png"></img>
	</a>
	<br>
	<br><br><br>
	
	
	<br><br><br><br><br><br><br>
</body>
</html>