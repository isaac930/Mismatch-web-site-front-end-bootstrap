<?php
// $host = "https://powerful-cliffs-24132.herokuapp.com";
// $port = "5432";
// $user = "qunlsntemapkhq";
// $pass = "f5a2e33d88dda9e681a204e099040b298543b5b35cbd6ccf11a05344ada70415";
// $db_name = "d8vab1ed2ht4so";
//$con = new mysqli($host, $user, $pass, $db_name);
$con = pg_connect("host=ec2-52-1-20-236.compute-1.amazonaws.com port=5432 dbname=d8vab1ed2ht4so user=qunlsntemapkhq password=f5a2e33d88dda9e681a204e099040b298543b5b35cbd6ccf11a05344ada70415");
function formatDate($date){
	return date('g:i a', strtotime($date));
}
?>