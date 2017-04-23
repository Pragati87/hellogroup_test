<?php

include "config.php";


?>	
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$("#currency").on("input", function(){
		
		$.ajax({
			type : "POST",
			url : "cur_conv.php",
			data : {a: $("#currency").val(), b:$("#cur1 option:selected").val(), c:$("#cur2 option:selected").val(), d:"req"},
			success : function(dat){
				var tmp = dat.split(",");
				$('#convert_currency').val(tmp[1]);
				$('#rate').val(tmp[0]);
				//alert("abcdefgh");
				//alert(dat)
			},
			error: function(err) {
				alert("cannot conver");
			}	
		})		
		
	})	
})
</script>
</head>

<body>


<?php 

?>

<form align="center" action="" method="post">

<div id="box">
<h2><center>Currency Converter</center></h2>
<center><table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount" id="currency">
	</td>

<td>
	<center>From:<select name='cur1' id="cur1">
	<!--<option value="INR"> Indian Rupee </option>-->
	 <?php
  
                 $dd_res=mysql_query("Select Name,Code from Currency_list");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       if($r[1] == "INR") {
					   echo "<option value='$r[1]' selected='selected'> $r[0] </option>";
					   }
					   else{
					   echo "<option value='$r[1]'> $r[0] </option>";
					   }
                 }
             ?>
	 </select>
</td>
</tr>
<tr>
<td>
Converted Amount: <input type="text" name="amount2" value="" id="convert_currency">
</td>
	<td>
	<center>To:<select name='cur2' id="cur2">
	<!--<option value="USD"> US Dollar </option>-->
	 <?php 
	 $dd_res=mysql_query("Select Name,Code from Currency_list");
	 while($r=mysql_fetch_row($dd_res))
                 { 
			 if($r[1] == "USD") {
					   echo "<option value='$r[1]' selected='selected'> $r[0] </option>";
					   }
					   else {
                       echo "<option value='$r[1]'> $r[0] </option>";
					   }
                 }
	?>
	</select>
</td>
</tr>
<tr>
<td>Exchange Rate : <input border= "none" type="text" name="rate" value="" id="rate"> </td>
</tr>

<tr>
<td><center>

<input type='button'value='Manage' class="btn" onclick="document.location.href='currency_management.php';"/>
</center>
</td>
</tr>

</table></center>
</form>


</body>
</html>

