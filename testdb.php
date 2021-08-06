<?php  
$con = mysql_connect("host=ec2-52-1-20-236.compute-1.amazonaws.com port=5432 dbname=d8vab1ed2ht4so user=qunlsntemapkhq password=f5a2e33d88dda9e681a204e099040b298543b5b35cbd6ccf11a05344ada70415"); 
if (!$con) {  
 echo "An error occurred.\n";  
 exit;  
}  
$result = my_query($con, "SELECT * FROM chats");  
if (!$result) {  
 echo "An error occurred.\n";  
 exit;  
}  
while ($row = my_fetch_row($result)) {  
 echo "value1: $row[0]  value2: $row[1]";  
 echo "<br />\n";  
}  
?>