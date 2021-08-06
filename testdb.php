<?php
include 'connection.php';
$email = $_GET['email'];
$my_email = $_GET['my_email'];

$query = pg_query($con, "SELECT * FROM chats ORDER BY id DESC");

while ($row = pg_fetch_row($query)) :
?>
<div class="alert alert-danger" role="alert">
<a class="message-author" href="#"> <?php echo $row[0];?> </a>
<hr>
<span class="message-date"> <?php echo $row[1];?> </span>
<hr>
<span class="message-content"> <?php echo $row[2];?> </span>
</div>
<?php endwhile; ?>
