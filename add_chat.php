<?php 
ob_start();
$email = $_GET['email'];
$my_email = $_GET['my_email'];
$token = $_GET['token'];
$usertype = $_GET['usertype'];
$message = $_GET['message'];
?>
<!DOCTYPE html>
<html>
<head>

<title>MISMATCH DATING APP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<script >
	
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;	
				}
			}
			req.open('GET','chat.php?email=<?php echo $email; ?>&my_email=<?php echo $my_email; ?>',true);
			req.send();
		}
		 setInterval(function() {ajax()}, 1000);

	</script>
</head>
<body onload="ajax();" id="page-top">

 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard?token=<?php echo $_GET['token'];?>&email=<?php echo $email;?>&my_email=<?php echo $my_email; ?>&usertype=<?php echo $usertype; ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <img src="chat-square-dots.svg" />
        </div>
        <div class="sidebar-brand-text mx-3">MISMATCH<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard?token=<?php echo $_GET['token'];?>&email=<?php echo $email;?>&my_email=<?php echo $my_email; ?>&usertype=<?php echo $usertype; ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navigation
    </div>

    <?php 
    if($usertype == 'admin'){
     ?>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Admin</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chat Management:</h6>
                <a class="collapse-item" href="profile_history?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>&my_email=<?php echo $my_email; ?>">
                        <img src="person-square.svg" /> All Profiles</a>
            </div>

        </div>
    </li>

    <?php
    }

    ?>

<?php if($usertype == 'user'){ ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Chats
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
          
            <i class="fas fa-fw fa-folder"></i>
        
            <span>Chats Area</span>
            
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
     
        <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Chats:</h6>

                <a class="collapse-item" href="add_profile?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">
                        
                        <img src="person-plus.svg" /> &nbsp;  &nbsp; Add  Or Your Profile</a>
                    
                        <a class="collapse-item" href="get_chat_list?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">
                        <img src="person-check.svg" /> &nbsp;Accept Chat Requests</a>

                        <a class="collapse-item" href="profile_history?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">
                        <img src="person-check.svg" /> &nbsp;  &nbsp;Searching List</a>

                        <a class="collapse-item" href="my_chatments?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">
                        <img src="person-check.svg" /> &nbsp;  &nbsp;Who I Like</a>

                        <a class="collapse-item" href="my_chatments_me?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">
                        <img src="person-check.svg" /> &nbsp;  &nbsp;Whom Likes Me</a>
               
                   
                    </div>
    </li>

    <?php }?>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

             <!-- Topbar Search -->
           <marquee scrolldelay="130"><h5 style="color:red;">This is a mismatch dating app </strong>which is consuming a backend in laravel,This front end just hits the end points</h5></marquee>

<!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter"><?php echo $successfull; ?></span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">Successfil People On Mismatch</div>
                                <span class="font-weight-bold"><?php  echo $successfull; ?></span>
                            </div>
                        </a>
                   
                   
                        <a class="dropdown-item text-center small text-gray-500" href="#">Also Your Match Today</a>
                    </div>
                </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">
                        <?php  echo $men+$women;?>
                        </span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                    alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Mismatch Has</div>
                                <div class="small text-gray-500">
                                   
                                <?php  echo $men+$women.' Users';?>
                                </div>
                            </div>
                        </a>
                     
   
                        <a class="dropdown-item text-center small text-gray-500" href="#">Thank You For Using Mismatch</a>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_GET['username']; ?></span>
      
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profile?token=<?php echo $token; ?>&usertype=<?php echo $usertype ; ?>" target="popup" 
                        onclick="window.open('profile?token=<?php echo $token; ?>&usertype=<?php echo $usertype ; ?>','popup','width=600,height=300'); return false;" >
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                         </a>
                         <a class="dropdown-item" href="dashboard?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Refresh Token
                        </a>
                      
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="alert alert-success" role="alert">

			<form method="POST" action="add_chat.php?token=<?php echo $token; ?>&usertype=<?php echo $usertype; ?>&email=<?php echo $email;?>&my_email=<?php echo $my_email; ?>">
            <div class="form-group">
<div class="col-sm-12 mb-3 mb-sm-0">
<input type="hidden" name="chatment_email" class="form-control form-control-user"
value="<?php echo $email; ?>"
placeholder="Chatment Email" required=""/>
</div></div>

<div class="form-group">
<div class="col-sm-12 mb-3 mb-sm-0">
<textarea name="post" placeholder="Enter your message" class="form-control form-control-user" required=""></textarea>
</div>
</div>


                <input type="submit" style="color: white;" name="submit" class="btn btn-primary btn-user btn-block" value="POST"/>
			</form>
            <br/>

            <div id="chat"></div>

	<?php
if(isset($_POST['submit']))
{
$token = $token; 
$chatment_email = $_POST['chatment_email'];
$post = $_POST['post'];

$url_path = 'https://powerful-cliffs-24132.herokuapp.com/api/auth/chats';

// Data should be passed as json format
$data_json = json_encode($data);

$ch = curl_init();

$data = array('chatment_email' => $chatment_email, 'post' => $post);

$authorization = "Authorization: Bearer ".$token;

curl_setopt($ch, CURLOPT_URL,$url_path);

curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
if (curl_errno($ch)) {
$response = curl_error($ch);
}
curl_close ($ch);

//print_r($response);

$outputArray = json_decode($response);

$message = $outputArray->{'message'};

}

?>

<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>

                    <!-- Content Row -->
                    <div class="row">


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Engineer Kirumira Isaac 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/disable_back_button.js"></script>

    <script>
 if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>