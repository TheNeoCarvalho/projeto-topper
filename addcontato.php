<?php
	require('admin/config.php');
	//Pegando valores do form página contatos
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];

	//Inserindo na tabela caontato
	//id	nome	assunto	tel	email	mensagem
	$sql = "INSERT INTO contato VALUES(DEFAULT, '$nome', '$assunto', '$telefone', '$email', '$mensagem')";

	$query = mysqli_query($conexao, $sql);
	
	  $sql = "SELECT LAST_INSERT_ID()"; 
      $con = mysqli_query($conexao, $sql);
      $res = mysqli_fetch_row($con); 

      $idContato =  $res[0];

      $sqlC = "INSERT INTO notificacoes VALUES (DEFAULT, $idContato, 0)";
      mysqli_query($conexao, $sqlC);


	if($query){
		echo "
		<script>
			alert('Enviado com sucesso!');
			location.href = 'index.html';
		</script>";
	}else{
		echo "
		<script>
			alert('Não foi possível enviar!');
			location.href = 'index.html';
		</script>";
	}


?>