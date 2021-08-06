<script type="text/javascript">
// close the div in 5 secs
window.setTimeout("closeHelpDiv();", 3000);

function closeHelpDiv(){
document.getElementById("helpdiv").style.display=" none";


window.location.replace("index");
}
</script>

<div class="alert alert-danger" id="helpdiv" role="alert">
<?php
$email = $_POST['email'];
$password = $_POST['password'];
$usertype = $_GET['usertype'];


$url_path = 'https://powerful-cliffs-24132.herokuapp.com/api/auth/refresh';

$ch = curl_init();

$data = array(
 'email' => $email,
 'password' => $password);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL,$url_path);
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
if (curl_errno($ch)) {
   $response = curl_error($ch);
}
curl_close ($ch);

$outputArray = json_decode($response);

$token = $outputArray->{'token'};

$usertype = $outputArray->{'usertype'};

$url_user = $usertype[0]->usertype;

if($token && $usertype){
    

    header("Location:dashboard?token=$token&usertype=$url_user&email=$email");

}

else{
    echo "Token refreshment failed, a new token could not be generated";
}


exit;
?>


</div>
</div>