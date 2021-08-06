
<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script >

		
		// function ajax(){
		// 	var req = new XMLHttpRequest();
		// 	req.onreadystatechange = function() {
		// 		if(req.readyState == 4 && req.status == 200){
		// 			document.getElementById('chat?id=<?php echo 6 ;?>&token=<?php echo 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYyODA0OTk0NSwiZXhwIjoxNjI4MTM2MzQ1LCJuYmYiOjE2MjgwNDk5NDUsImp0aSI6InBxZkFjQUtyOGRPMzlaeWsiLCJzdWIiOjIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.z_LaExgWXXSdSgzYYApnVfGLZXwK_kcBOsNNqo2PC9M' ;?>&usertype=<?php echo 'user' ; ?>&email=<?php echo 'oliva@gmail.com' ;?>&searching_status=<?php echo 'single';?>').innerHTML = req.responseText;	
		// 		}
		// 	}
		// 	req.open('GET','chat.php',true);
		// 	req.send();
		// }
		// setInterval(function() {ajax()}, 1000);
	</script>

<script>
function ajax(){
 
  $('#chat').load('chat.php');
  setInterval(function() {ajax()}, 1000);
}
</script>
</head>
<body onload="ajax();">
	<h2 align="center" style="border-bottom: 1px solid grey;"> CHAT ROOM</h2>
	<div class="ibox-content">
        <div class="row">
            <div style="margin-left: 10%;" class=" col-md-10">
                <div class="chat-discussion">
                    <div class="chat-message left">
                        <div id="chat"></div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div style="background-color:white;" class="row">
     	<div style="margin-left: 20%;" class="col-md-8">
			<form method="POST" action="chat-room.php">
				<div></div>
				<input type="text" name="name" placeholder="Enter your name" required="">
				<textarea name="message" placeholder="Enter your message" required=""></textarea>
				<input type="submit" style="color: white;" name="submit" value="Send it"/>
			</form>
		</div>
	</div>
	
	<?php
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$message = $_POST['message'];
			$query = "INSERT INTO chat (name, message) VALUES ('$name','$message')";
			$run = $con -> query($query);

			if($run){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
				<?php
			}
		}
	?>


</body>
</html>