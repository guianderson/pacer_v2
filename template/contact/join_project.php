<?php

include '../assets/conecta.php';
session_start();

$project_id = $_POST['team'];

if ($project_id == 0) {
	echo "<script>alert('Por favor, selecione uma equipe.');
            window.location.replace('../join_project.php');
         </script>";
}else{

	$verifica = "SELECT COUNT(user_id) FROM user_project where user_id = '".$_SESSION['id_user']."'";
	$result = mysqli_query($conecta, $verifica);
	$row= mysqli_fetch_array($result);

	if ($row[0] == 0) {
		$sql = "INSERT INTO user_project (user_id, project_id, sn_ativo) VALUES ('".$_SESSION['id_user']."', '".$project_id."', 'S')";
		if ($conecta->query($sql) === TRUE) {
		  echo "<script>alert('Projeto adicionado com sucesso!');
		            window.location.replace('../join_project.php');
		        </script>";
		} 
	}else {
		echo "<script>alert('Você já faz parte deste projeto.');
		        window.location.replace('../join_project.php');
		      </script>";
	}
}



?>