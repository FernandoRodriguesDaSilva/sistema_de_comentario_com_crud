<?php
include_once("conexao/conexao.php");
// Fazendo um filtro nas variaveis 
$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$comentario    = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $conecta->query("SELECT * FROM tb_comentarios");
while ($registros = $querySelect->fetch_assoc()){
	$nome = $registros['nome'];
	$comentario = $registros['comentario'];

echo "<tr>"; // onde vai capturar os dados no banco
echo "<td>$nome</td>";
echo "<td>$comentario</td>";
echo "</tr>";
}


