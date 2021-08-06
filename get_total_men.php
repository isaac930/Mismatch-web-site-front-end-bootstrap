<?php
//this end point does not require authentication,so no need to pass on the token
$opts = array('http'=>array('method'=>"GET",'header'=>"Accept-language: en\r\n" ."Cookie: foo=bar\r\n")); 

$context = stream_context_create($opts);
$url ="https://powerful-cliffs-24132.herokuapp.com/api/auth/totalmen";

$data = file_get_contents($url,false,$context);

$b=json_decode($data);

$men = $b->{'total_men'};
?>
