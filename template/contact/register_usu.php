<?php

include'../assets/conecta.php';

$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$role = $_POST['role'];

if ($role == 'A') {
	$sn_activated = 'S';
}else{
	$sn_activated = 'N';
}

if ($conecta->connect_error) {
  die("Connection failed: " . $conecta->connect_error);
}

$sql = "INSERT INTO users (username, password, role, email, sn_activated)
VALUES ('".$username."', '".$senha."', '".$role."', '".$email."', '".$sn_activated."')";

if ($conecta->query($sql) === TRUE) {
  echo "<script>alert('Usuário registrado com sucesso!');
            window.location.replace('../login.php');
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conecta->error;
}

$conecta->close();
?>