<?php
 $databaseHost = "localhost"; 
 $databaseUser = "root";
 $databasePassword = "";
 $databaseName = "currency_conversion";
        
      $con=mysql_connect($databaseHost ,$databaseUser ,$databasePassword )or die ('Connection Error');
      mysql_select_db("currency_conversion",$con) or die ('Database Error');
 ?>