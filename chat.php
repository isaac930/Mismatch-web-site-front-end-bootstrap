<?php
include 'connection.php';
$email = $_GET['email'];
$my_email = $_GET['my_email'];

//$query = "SELECT * FROM chats where ((email='$email' and chatment_email='$my_email') or (email='$email' and chatment_email='')) or ((email='$my_email' and chatment_email='$email') or (email='$my_email' and chatment_email=''))   ORDER BY id DESC";

$query = pg_query($con, "SELECT * FROM chats where ((email='$email' and chatment_email='$my_email') or (email='$email' and chatment_email='')) or ((email='$my_email' and chatment_email='$email') or (email='$my_email' and chatment_email=''))   ORDER BY id DESC");

//$run = $con -> query($query);
//while ($row = $run->fetch_array()) :

while ($row = pg_fetch_row($query)) :
?>
<div class="alert alert-danger" role="alert">
<?php $baseurl = "https://isaacbucketenock.s3.us-east-2.amazonaws.com/users/"; ?>
<img src="<?php echo $baseurl.$row['image_path']?>" width="70" height="70" class="rounded-circle float-left" alt="profile-picture" border="0" />
<br/>
<br/>
<a class="message-author" href="#"> <?php echo $row['name'];?> </a>
<hr>
<span class="message-date"> <?php echo $row['date'];?> </span>
<hr>
<span class="message-content"> <?php echo $row['post'];?> </span>
</div>
<?php endwhile; ?>
