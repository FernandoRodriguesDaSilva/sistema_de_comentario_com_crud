<!--  Inserindo dados no banco  -->
<?php 
// inicializando a variavel de sessão
session_start();
include 'conexao/conexao.php';
// Fazendo um filtro nas variaveis
$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$comentario    = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);

$queryInsert = $conecta->query("INSERT INTO tb_comentarios VALUES(DEFAULT,'$nome','$comentario')");
	// se alguma linha for afetada
$affected_rows = mysqli_affected_rows($conecta);
	// se uma linha for afetada na tabela
if($affected_rows > 0){
	$_SESSION['msg'];
	header("Location:../index.php");
}