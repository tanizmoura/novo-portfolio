<?php  
try {

	$conexao = new PDO('mysql:host=localhost; dbname=trabalhos_portfolio','root','');

	$query = 'select t.id_trabalho, titulo, i.link from tb_trabalhos as t 
	left join tb_imagens as i on (t.id_trabalho = i.id_trabalho) where tipo_img = 1'; 

	$stmt = $conexao->prepare($query);
	$stmt->execute();

	$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$qtdTrabalhos = count($dados);


} catch(PDOException $e) {
	echo'<p>' . $e->getMessege() . '</p>';
}

?>