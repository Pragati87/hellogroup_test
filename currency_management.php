<?php
include "config.php";
?>
<html>
<head>
</head>

<body>
<form name="Manage" action="currency_management.php" method="Post">
Currency Name:<input type="textbox" value="" name="Name"> 
Currency Code: <input type="textbox" value="" name="Code">
Exchange Rate [To USD]: <input type="textbox" value="" name="Rate"> 
<input type="Submit" value="Submit" name ="Submit">
</form>
<br><br>
<?php


if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['Submit']=="Submit"){
	if(($_POST['Name']) && ($_POST['Code'])&& ctype_digit($_POST['Rate'])){
$sql = 'INSERT INTO `currency_list` (`Name`, `Code`, `Rate`) VALUES ("'.mysql_real_escape_string($_POST['Name']).'", "'.mysql_real_escape_string($_POST['Code']).'", "'.mysql_real_escape_string($_POST['Rate']).'");';
$result = mysql_query($sql);
if ($result == null)
{
	echo "Error can not insert Data";
}
}
else {
echo " <b> * Please Provide the correct values</b><br>";
}
}
?>
<table border="1">
<tr>
<td>S.No.</td>
<td>Currenncy Name</td>
<td>Currency Code </td>
<td> Exchange Rate</td>
</tr>
<?php
$dd_res=mysql_query("Select * from Currency_list");
                 while($r=mysql_fetch_row($dd_res))
				 {
					  echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td></tr>";
				 }
				 ?>
				 </table>
				 
				 
				 </body>
				 </html>