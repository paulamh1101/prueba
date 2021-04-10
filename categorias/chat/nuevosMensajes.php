<?php
session_start();
require_once ('lib/config.php');

ini_set('error_reporting',0);

if(isset($_SESSION['usuario']))
{
  //header("Location: index.php");
}
?>

<ul class="nav nav-pills nav-stacked">
	<?php
		$user = mysqli_real_escape_string($connect, $_GET['usuario']);
		$sess = $_SESSION['id'];
		
	
		$chats = mysqli_query($connect, "SELECT * FROM usuarios where id_use != $sess");
		while($ch = mysqli_fetch_array($chats)) { 
	?>
			<li class="active"><a href="#" onclick="datos('<?php echo $ch['id_use']; ?>','<?php echo $ch['nombre']; ?>');"><img class="direct-chat-img" src="avatars/<?php echo $ch['avatar']; ?>" alt="Message User Image"><!-- /.direct-chat-img --> <?php echo $ch['nombre']; ?>
			  <span class="label label-primary pull-right">
				<?php
					$leido = mysqli_query($connect, "SELECT count(leido) AS leido FROM chats
													 INNER JOIN usuarios
													 ON de = id_use
													 WHERE de = $ch[id_use] AND id_use != $sess
													 AND leido = 0");
					while($row = mysqli_fetch_array($leido)) {
						echo $row['leido'];
					}
				?>
			  
			  </span></a></li>
	<?php } ?>
</ul> 