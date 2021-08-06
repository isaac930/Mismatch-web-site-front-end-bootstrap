<?php
include 'connection.php';
$email = $_GET['email'];
$my_email = $_GET['my_email'];

$query = pg_query($con, "SELECT * FROM chats ORDER BY id DESC");

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
