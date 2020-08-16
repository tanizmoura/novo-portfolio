<?php  
try {

	$id_trabalho = $_GET['id'];
	$qtdTrabalhos = $_GET['qtd'];

	$conexao = new PDO('mysql:host=localhost; dbname=trabalhos_portfolio','root','');

	$query = "select titulo, cliente, descricao, tecnologias, link, participacao from tb_trabalhos where id_trabalho = :id_trabalho"; 

	$query2 = "select link from tb_imagens where id_trabalho = :id_trabalho and tipo_img = 2";

	$stmt = $conexao->prepare($query);
	$stmt->bindValue(':id_trabalho', $id_trabalho);
	$stmt->execute();

	$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

	/*echo'<pre>';
	print_r($dados);
	echo'</pre>';*/

	$stmt = $conexao->prepare($query2);
	$stmt->bindValue(':id_trabalho', $id_trabalho);
	$stmt->execute();

	$imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

	/*echo'<pre>';
	print_r($imagens);
	echo'</pre>';*/

} catch(PDOException $e) {
	echo'<p>' . $e->getMessege() . '</p>';
}

?>