<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MISMATCH DATING APP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-3 d-none d-lg-block">
        
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="color:red;"><marquee scrolldelay="130">MISMATCH DATING APP</marquee></h1>
                                    </div>
<script type="text/javascript">
// close the div in 5 secs
window.setTimeout("closeHelpDiv();", 000);

function closeHelpDiv(){
document.getElementById("helpdiv").style.display=" none";

window.location.replace("index");
}
</script>                                    

<div class="alert alert-success" id="helpdiv" role="alert">

<?php
if(isset($_POST['register']))

{
$name = $_POST['name'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$usertype = $_GET['usertype'];

$url_path = 'https://powerful-cliffs-24132.herokuapp.com/api/auth/register';

$ch = curl_init();
$cfile = new CURLFile($_FILES['file']['tmp_name'],$_FILES['file']['type'],$_FILES['file']['name']);

$data = array('file' => $cfile,
 'email' => $email,
 'name' => $name,
 'password' => $password,
 'password_confirmation' => $password_confirmation,
 'contact' => $contact,);
curl_setopt($ch, CURLOPT_URL,$url_path);
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
if (curl_errno($ch)) {
   $response = curl_error($ch);
}
curl_close ($ch);
}
?>

</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/disable_back_button.js"></script>

</body>

</html>