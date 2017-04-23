<?php   // including configuration file
function convert($currency_input,$currency_from,$currency_to){
    $yql_base_url = "http://query.yahooapis.com/v1/public/yql";
    $yql_query = 'select * from yahoo.finance.xchange where pair in ("'.$currency_from.$currency_to.'")';
    $yql_query_url = $yql_base_url . "?q=" . urlencode($yql_query);
    $yql_query_url .= "&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
    $yql_session = file_get_contents($yql_query_url);
    $yql_json =  json_decode($yql_session,true);
    $currency_output = (float) $currency_input*$yql_json['query']['results']['rate']['Rate'];
	//echo $yql_json['query']['results']['rate']['Rate'];
	//echo '<br>';
	$arr = array();
	$arr[0] = $yql_json['query']['results']['rate']['Rate'];
	$arr[1] = $currency_output;
	
    //return $arr;
	foreach($arr as $a)
    echo $a.",";
}


echo convert($_POST['a'],$_POST['b'],$_POST['c']);
?>
