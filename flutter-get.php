<?php
$con = $con = mysql_connect("localhost","nusrhjdq_flutter_user","*PJqg_IyoS1t");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("nusrhjdq_flutter", $con);
$result = mysql_query("SELECT * FROM Profile");
while($row = mysql_fetch_assoc($result))
  {
	$output[]=$row;
  }
print(json_encode($output));
mysql_close($con);
?>