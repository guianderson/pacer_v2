<?php 

include '../assets/conecta.php';

$user = $_POST['user'];
$pass = $_POST['password'];

if ($conecta->connect_error) {
  die("Connection failed: " . $conecta->connect_error);
}

$sql = "SELECT * FROM users where username = '".$user."' and password = '".$pass."' and sn_activated = 'S'";

$result = mysqli_query($conecta, $sql);
$row= mysqli_fetch_array($result);

if (!is_null($row)) {
	session_start();
	$_SESSION['usuario'] = $_POST['user'];
	$_SESSION['id_user'] = $row[0];
	echo "<script>
			alert('Login realizado com sucesso!');
            window.location.replace('../index.php');
         </script>";
}else{
	echo"<script>
			alert('Falha ao realizar Login, por favor, verifique suas credênciais');
            window.location.replace('../login.php');
         </script>";
	}
?>