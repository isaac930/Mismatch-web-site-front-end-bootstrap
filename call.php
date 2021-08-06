<?php
// lets get replies a user makes
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$authorization = "Authorization: Bearer ".$token; //authorization bearer token

$url = "https://powerful-cliffs-24132.herokuapp.com/api/auth/get_my_replies";

curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array($authorization));

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$response_data = json_decode($curl_data);

// Print all data if needed
//print_r($response_data);
// die();

// All reply data exists in 'data' object
$reply_data = $response_data->chats_replies;

// Extract only first 10 chats_reply data (or  array elements)
// $sliced_reply_data = array_slice($chats_replies, 0, 9);

//print_r($reply_data);

?>

<?php
//loop through the posts returned and display each inside a div
foreach ($reply_data as $replyreturned) {
?>

<div class="alert alert-danger" role="alert">
<?php $baseurl = "https://isaacbucketenock.s3.us-east-2.amazonaws.com/users/"; ?>
<img src="<?php echo $baseurl.$replyreturned->image_path?>" width="70" height="70" class="rounded-circle float-left" alt="profile-picture" border="0" />
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<pi class="text float-center">    
<?php echo $replyreturned->chatment_name.': ';  ?> 
<?php echo $replyreturned->post;  ?>
</pi>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<hr>
<?php $baseurl = "https://isaacbucketenock.s3.us-east-2.amazonaws.com/users/"; ?>
<img src="<?php echo $baseurl.$replyreturned->chatment_image_path?>" width="70" height="70" class="rounded-circle float-left" alt="profile-picture" border="0" />
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<pi class="text float-center">
<?php echo 'Receiver: '.$replyreturned->name.'<ty style="color:blue;">'.' : Replied: '.'</ty>'.'<pp style="color:green;">'.$replyreturned->reply_post.'</pp>';  ?>
</pi>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<?php echo $replyreturned->date.': ';  ?>
<br/>
<br/>
<br/>
</div>

<?php
}
?>