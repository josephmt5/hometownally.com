<!doctype html>
<html>
<body>
	<style>
	table
		{
			background-color: white;
		}
	</style>
<?php
	$user = "josephmt5";
	$pass = "thompson01";
	$db = new PDO('mysql:host=198.71.225.53:3306;dbname=apptcenterdb', $user, $pass);	
?>
	<form method=post>
	<table border="1">
	<thead>
    	<tr>
        	<th>Times</th>
            <th>Actions</th>
			
        </tr>
    </thead>
    <tbody>
<?php
		$errors="";
	$user = "josephmt5";
$pass = "thompson01";
$db = new PDO('mysql:host=198.71.225.53:3306;dbname=apptcenterdb', $user, $pass);
				
	
$query = $db->query("SELECT time FROM windows");
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	echo "<tr>";
	echo "<td>".$row['time']."</td>";
	
	echo "<td>  <input type=submit value=remove name='".$row['time']."'></input> </td>";
	echo "</tr>";
	
	
	if ( isset( $_POST[$row['time']]) )
{
	
$delete = $db->prepare("DELETE FROM `windows` WHERE time='".$row['time']."'");

$delete->execute();
echo "Deleted: ".$row['time']."<br>";
header( 'Location: http://control.apptcenter.com/index.php/tech/add');

}
	



}
?>
		</form>	
    </tbody>
</table>
	<br>
	add a window (6:00am-8:00am)
	<form  method="post">
	
		<input name=time height="20%" type="text"><br>
		<br>
		<input type="submit" name="submit" Value=submit></input>
			</form>
	
		
	
	
<?php	


	echo "<font color='blue' size='5'>&nbsp;&nbsp;&nbsp;&nbsp;$errors</font>";	
	
	if ( isset( $_POST['submit'] ) )
	{
		if(isset ($_POST['time']) && strlen(trim($_POST['time']))>0)
		{
			$time =$_POST['time'];
				$insert = $db->prepare("INSERT INTO windows ( time ) VALUES ( ?)");
				$insert->bindParam(1, $time);

				$insert->execute();
				header( 'Location: http://control.apptcenter.com/index.php/tech/add' );
		}
		else{$errors = "*Please enter your time<br>";}
	}
		
			
			
	
?>

<br>

<table border="1">
	<thead>
    	<tr>
        	<th>Days you are closed</th>
           
			
        </tr>
    </thead>
    <tbody>
<?php
		
				
	
$query = $db->query("SELECT day FROM days");
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	echo "<tr>";
	echo "<td>".getday($row['day'])."</td>";
	
	
	echo "</tr>";
	
	
	
	



}
		function getDay($w){
			$w=(int)$w;
			
    $dowMap = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    
    return $dowMap[$w];
}
?>
		</form>	
    </tbody>
</table>
	
	<br>
What days do you not want to take appointments<br>
<form method=post>
	
	
	<input type="checkbox" name="monday" value="2">Monday<br>
	<input type="checkbox" name="tuesday" value="3"> Tuesday<br>
	<input type="checkbox" name="wednesday" value="4"> Wednesday<br>
	<input type="checkbox" name="thursday" value="5"> Thursday<br>
	<input type="checkbox" name="friday" value="6"> Friday<br>
	<input type="checkbox" name="saturday" value="7"> Saturday<br>
	<input type="checkbox" name="sunday" value="1"> Sunday<br>
	<input type="submit" name="submit1" Value=submit></input>
</form>
	
<?
if ( isset( $_POST['submit1'] ) ){
	
	$insert = $db->prepare("TRUNCATE days");
	$insert->execute();			
	
	
if(isset ($_POST['monday']))
{
	$insert = $db->prepare("INSERT INTO days ( day ) VALUES ( '1')");
	$insert->execute();			

}
	else
	{
		$delete = $db->prepare("DELETE FROM `days` WHERE day='1'");

$delete->execute();
	}
	
	if(isset ($_POST['tuesday']))
{
	$insert = $db->prepare("INSERT INTO days ( day ) VALUES ( '2')");
	$insert->execute();			

}
	else
	{
		$delete = $db->prepare("DELETE FROM `days` WHERE day='2'");

$delete->execute();
	}
	
	if(isset ($_POST['wednesday']))
{
	$insert = $db->prepare("INSERT INTO days ( day ) VALUES ( '3')");
	$insert->execute();			

}
	else
	{
		$delete = $db->prepare("DELETE FROM `days` WHERE day='3'");

$delete->execute();
	
	}
	
	if(isset ($_POST['thursday']))
{
	$insert = $db->prepare("INSERT INTO days ( day ) VALUES ( '4')");
	$insert->execute();			

}
	else
	{
		$delete = $db->prepare("DELETE FROM `days` WHERE day='4'");

$delete->execute();
	
	}
	
	if(isset ($_POST['friday']))
{
	$insert = $db->prepare("INSERT INTO days ( day ) VALUES ( '5')");
	$insert->execute();			

}
	else
	{
		$delete = $db->prepare("DELETE FROM `days` WHERE day='5'");

$delete->execute();
	
	}
	
	if(isset ($_POST['saturday']))
{
	$insert = $db->prepare("INSERT INTO days ( day ) VALUES ( '6')");
	$insert->execute();			

}
	else
	{
		$delete = $db->prepare("DELETE FROM `days` WHERE day='6'");

$delete->execute();
	
	}
	
	
	
	
	if(isset ($_POST['sunday']))
{
	$insert = $db->prepare("INSERT INTO days ( day ) VALUES ( '0')");
	$insert->execute();			

}
	else
	{
		$delete = $db->prepare("DELETE FROM `days` WHERE day='0'");

$delete->execute();
	
	}
	
	header( 'Location: http://control.apptcenter.com/index.php/tech/add' );
	
	
	
}
?>
</body>
</html>