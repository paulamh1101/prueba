<?php
session_start();
require_once ('lib/config.php');

ini_set('error_reporting',0);

if(!isset($_SESSION['usuario']))
{
  header("Location: login.php");
}

if(isset($_POST['mensaje']) && isset($_POST['btn_enviar'])){
	$mensaje = mysqli_real_escape_string($connect, $_POST['mensaje']);
	$de = $_SESSION['id'];
	$para = mysqli_real_escape_string($connect, $_POST['usuario']);
	$update = mysqli_query($connect, "UPDATE chats SET leido = 1 WHERE leido = 0 AND para = '$de' AND de = '$para'");
	"SELECT * FROM c_chats WHERE de = '$de' AND para = '$para' OR de = '$para' AND para = '$de'";
	$comprobar = mysqli_query($connect, "SELECT * FROM c_chats WHERE de = '$de' AND para = '$para' OR de = '$para' AND para = '$de'");
	$com = mysqli_fetch_array($comprobar);
	if(mysqli_num_rows($comprobar) == 0) {
		$insert = mysqli_query($connect, "INSERT INTO c_chats (de,para) VALUES ('$de','$para')");
		$siguiente = mysqli_query($connect, "SELECT id_cch FROM c_chats WHERE de = '$de' AND para = '$para' OR de = '$para' AND para = '$de'");
		$si = mysqli_fetch_array($siguiente);
		$insert2 = mysqli_query($connect, "INSERT INTO chats (id_cch,de,para,mensaje,fecha,leido) VALUES ('".$si['id_cch']."','$de','$para','$mensaje',now(),'0')");
		//if($insert) {echo '<script>window.location="chat.php?usuario='.$para.'"</script>';}
?>
		<!-- Conversations are loaded here -->
			<!--<div class="direct-chat-messages" style="overflow: scroll; height: 400px;">


			<?php
			$user = mysqli_real_escape_string($connect, $_POST['usuario']);
			$sess = $_SESSION['id'];
			$chats = mysqli_query($connect, "SELECT * FROM chats WHERE de = '$user' AND para = '$sess' OR de = '$sess' AND para = '$user' order by id_cha asc");
			while($ch = mysqli_fetch_array($chats)) { 

				if($ch['de'] == $user) {$var = $user;} else {$var = $sess;}
				$usere = mysqli_query($connect, "SELECT * FROM usuarios WHERE id_use = '$var'");
				$us = mysqli_fetch_array($usere);

				if ($ch['de'] == $user) { ?>
				<!-- Message. Default to the left -->
				<div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left"><?php echo $us['usuario']; ?></span>
					<span class="direct-chat-timestamp pull-right"><?php echo $ch['fecha']; ?></span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>"><!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					<?php echo $ch['mensaje']; ?>
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
				<!-- /.direct-chat-msg -->

				<?php } elseif ($ch['para'] == $user) { ?>

				<!-- Message to the right -->
				<div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right"><?php echo $us['usuario']; ?></span>
					<span class="direct-chat-timestamp pull-left"><?php echo $ch['fecha']; ?></span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>" alt="Message User Image"><!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					<?php echo $ch['mensaje']; ?>
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
				<!-- /.direct-chat-msg -->

				<?php } ?>


				<?php } ?>



			<!--</div>
			<!--/.direct-chat-messages-->
<?php
	}
	else
	{
		if($mensaje == "") {

			echo '<br>';
			echo '<div class="alert alert-danger alert-dismissible">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Escriba un mensaje :(
			</div>';
		}else{ 
			$insert3 = mysqli_query($connect, "INSERT INTO chats (id_cch,de,para,mensaje,fecha,leido) VALUES ('".$com['id_cch']."','$de','$para','$mensaje',now(),'0')");
			//if($insert3) {echo '<script>window.location="chat.php?usuario='.$para.'"</script>';}
?>
			<!-- Conversations are loaded here -->
			<!--<div class="direct-chat-messages" style="overflow: scroll; height: 400px;">


			<?php
			$user = mysqli_real_escape_string($connect, $_POST['usuario']);
			$sess = $_SESSION['id'];
			$chats = mysqli_query($connect, "SELECT * FROM chats WHERE de = '$user' AND para = '$sess' OR de = '$sess' AND para = '$user' order by id_cha asc");
			while($ch = mysqli_fetch_array($chats)) { 

				if($ch['de'] == $user) {$var = $user;} else {$var = $sess;}
				$usere = mysqli_query($connect, "SELECT * FROM usuarios WHERE id_use = '$var'");
				$us = mysqli_fetch_array($usere);

				if ($ch['de'] == $user) { ?>
				<!-- Message. Default to the left -->
				<div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left"><?php echo $us['usuario']; ?></span>
					<span class="direct-chat-timestamp pull-right"><?php echo $ch['fecha']; ?></span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>"><!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					<?php echo $ch['mensaje']; ?>
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
				<!-- /.direct-chat-msg -->

				<?php } elseif ($ch['para'] == $user) { ?>

				<!-- Message to the right -->
				<div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right"><?php echo $us['usuario']; ?></span>
					<span class="direct-chat-timestamp pull-left"><?php echo $ch['fecha']; ?></span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>" alt="Message User Image"><!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					<?php echo $ch['mensaje']; ?>
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
				<!-- /.direct-chat-msg -->

				<?php } ?>


				<?php } ?>



			<!--</div>
			<!--/.direct-chat-messages-->
<?php
		}
	}
}else if(isset($_POST['usuario'])){
?>
	<!-- Conversations are loaded here -->
	<!--<div class="direct-chat-messages" style="overflow: scroll; height: 400px;">


	<?php
	$user = mysqli_real_escape_string($connect, $_POST['usuario']);
	$sess = $_SESSION['id'];
	echo $update = mysqli_query($connect, "UPDATE chats SET leido = 1 WHERE leido = 0 AND de = '$user' AND para = '$sess' OR de = '$sess' AND para = '$user'");
	$chats = mysqli_query($connect, "SELECT * FROM chats WHERE de = '$user' AND para = '$sess' OR de = '$sess' AND para = '$user' order by id_cha asc");
	while($ch = mysqli_fetch_array($chats)) { 

		if($ch['de'] == $user) {$var = $user;} else {$var = $sess;}
		$usere = mysqli_query($connect, "SELECT * FROM usuarios WHERE id_use = '$var'");
		$us = mysqli_fetch_array($usere);

		if ($ch['de'] == $user) { ?>
		<!-- Message. Default to the left -->
		<div class="direct-chat-msg">
		  <div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-left"><?php echo $us['usuario']; ?></span>
			<span class="direct-chat-timestamp pull-right"><?php echo $ch['fecha']; ?></span>
		  </div>
		  <!-- /.direct-chat-info -->
		  <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>"><!-- /.direct-chat-img -->
		  <div class="direct-chat-text">
			<?php echo $ch['mensaje']; ?>
		  </div>
		  <!-- /.direct-chat-text -->
		</div>
		<!-- /.direct-chat-msg -->

		<?php } elseif ($ch['para'] == $user) { ?>

		<!-- Message to the right -->
		<div class="direct-chat-msg right">
		  <div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-right"><?php echo $us['usuario']; ?></span>
			<span class="direct-chat-timestamp pull-left"><?php echo $ch['fecha']; ?></span>
		  </div>
		  <!-- /.direct-chat-info -->
		  <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>" alt="Message User Image"><!-- /.direct-chat-img -->
		  <div class="direct-chat-text">
			<?php echo $ch['mensaje']; ?>
		  </div>
		  <!-- /.direct-chat-text -->
		</div>
		<!-- /.direct-chat-msg -->

		<?php } ?>


		<?php } ?>



	<!--</div>
	<!--/.direct-chat-messages-->
<?php
}
?>