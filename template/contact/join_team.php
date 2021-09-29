<?php

include '../assets/conecta.php';
session_start();

$team_id = $_GET['id'];

if ($team_id == 0) {
	echo "<script>alert('Por favor, selecione um equipe.');
            window.location.replace('../join_team.php');
         </script>";
}else{

	$verifica_proj = "SELECT id_project, team_name FROM teams where id_team = '".$team_id."'";
	$result_proj = mysqli_query($conecta, $verifica_proj);
	$row_proj= mysqli_fetch_array($result_proj);

	$verifica = "SELECT COUNT(user_id) FROM user_teams where user_id = '".$_SESSION['id_user']."' AND team_id = '".$team_id."'";
	$result = mysqli_query($conecta, $verifica);
	$row= mysqli_fetch_array($result);

	if ($row[0] == 0) {
		$sql = "INSERT INTO user_teams (user_id, team_id, project_id, sn_ativo) VALUES ('".$_SESSION['id_user']."', '".$team_id."', '".$row_proj['id_project']."', 'S')";
		if ($conecta->query($sql) === TRUE) {
		  echo "<script>alert('Parabéns, agora você é um integrante do time ".$row_proj['team_name']."!');
		            window.location.replace('../my_teams.php');
		        </script>";
		} 
	}else {
		echo "<script>alert('Você já faz parte deste time.');
		        window.location.replace('../my_teams.php');
		      </script>";
	}
}



?>