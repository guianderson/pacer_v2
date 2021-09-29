<?php

include '../assets/conecta.php';
session_start();

$team_id = $_GET['id'];

if ($team_id == 0) {
	echo "<script>alert('Por favor, selecione uma equipe.');
            window.location.replace('../join_project.php');
         </script>";
}else{

	$verifica = "SELECT COUNT(user_id) FROM user_teams where user_id = '".$_SESSION['id_user']."'";
	$result = mysqli_query($conecta, $verifica);
	$row= mysqli_fetch_array($result);

	if ($row[0] == 0) {
		$sql = "INSERT INTO user_teams (user_id, team_id, project_id, sn_ativo) VALUES ('".$_SESSION['id_user']."', '".$team_id."', 
		'".$_SESSION['id_project']."', 'S')";
		if ($conecta->query($sql) === TRUE) {
		  echo "<script>alert('Projeto adicionado com sucesso!');
		            window.location.replace('../my_teams.php');
		        </script>";
		} 
	}else {
		echo "<script>alert('Você já faz parte desta equipe.');
		        window.location.replace('../project.php?id=".$team_id."');
		      </script>";
	}
}



?>