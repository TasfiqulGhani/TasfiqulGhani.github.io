 
 
 <?php 

$con = $con = mysql_connect("localhost","nusrhjdq_testu","test123123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("nusrhjdq_test", $con);
$result = mysql_query("SELECT * FROM Health");
while($row = mysql_fetch_assoc($result))
  {
	$output[]=$row;
  }
print(json_encode($output));
mysql_close($con);
?>