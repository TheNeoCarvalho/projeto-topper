<?php

	session_start();

	require 'config.php';

	$sql = "SELECT * FROM `notificacoes` WHERE status = 0";
	$query = mysqli_query($conexao, $sql);

	$notify = mysqli_num_rows($query);

		if($notify == 0){
			$_SESSION['msg'] = "Você não possui mensagens";
		}else{
			$_SESSION['msg'] = "Você possui $notify mensagens";
		}

	echo $notify;

?>