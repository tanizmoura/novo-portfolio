<?php  

$tipo_cadastro = $_GET['cadastro'];

$conexao = new PDO('mysql:host=localhost; dbname=trabalhos_portfolio','root','');

if($tipo_cadastro == 1) {

	if ($_POST['titulo'] != null && $_POST['descricao'] 
		!= null && $_POST['tecnologias'] != null && $_POST['participacao'] != null) {

		$titulo = $_POST['titulo'];
		$descricao = $_POST['descricao'];
		$link = $_POST['link'];
		$cliente = $_POST['cliente'];
		$tecnologias = $_POST['tecnologias'];
		$participacao = $_POST['participacao']; 
		
		$query = "insert into tb_trabalhos (titulo,descricao,link,cliente,
		tecnologias,participacao) values ('$titulo','$descricao', '$link', 
		'$cliente', '$tecnologias', '$participacao')";

		$stmt = $conexao->prepare($query);
		$stmt->execute();
		
		header('location: cadastro_trabalho.php?inserido=1');

	} else {
		header('location: cadastro_trabalho.php?inserido_erro=1');
	}

} else if ($tipo_cadastro == 2) {

	if ($_POST['link_img'] != null) {
		$link_img = $_POST['link_img'];
		$id_trabalho = $_POST['id_trabalho'];
		$tipo_img = $_POST['tipo_img'];

		$query = "insert into tb_imagens (id_trabalho,link, tipo_img) values ('$id_trabalho', '$link_img', '$tipo_img')";

		$stmt = $conexao->prepare($query);
		$stmt->execute();

		header('location: cadastro_trabalho.php?inserido=2');
	} else {
		header('location: cadastro_trabalho.php?inserido_erro=2');
	}

}

?>