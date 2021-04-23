 <?php 

$con = $con = mysql_connect("localhost","nusrhjdq_testu","test123123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("nusrhjdq_test", $con);
$result = mysql_query("DELETE FROM Health");
 
print('All data removed !');
mysql_close($con);
?>