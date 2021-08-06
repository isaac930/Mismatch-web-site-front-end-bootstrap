<?php
include 'connection.php';
$email = $_GET['email'];
$my_email = $_GET['my_email'];

$query = pg_query($con, "SELECT * FROM chats where ((email='$email' and chatment_email='$my_email') or (email='$email' and chatment_email='')) or ((email='$my_email' and chatment_email='$email') or (email='$my_email' and chatment_email=''))   ORDER BY id DESC");

while ($row = pg_fetch_row($query)) :
?>
<div class="alert alert-danger" role="alert">
<?php $baseurl = "https://isaacbucketenock.s3.us-east-2.amazonaws.com/users/"; ?>
<img src="<?php echo $baseurl.$row[9]?>" width="70" height="70" class="rounded-circle float-left" alt="profile-picture" border="0" />
<br/>
<br/>
<a class="message-author" href="#"> <?php echo $row[2];?> </a>
<hr>
<span class="message-date"> <?php echo $row[1];?> </span>
<hr>
<span class="message-content"> <?php echo $row[8];?> </span>
</div>
<?php endwhile; ?>
