<?php

require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');

$edital = $_POST['edital'];

$nome_opcao_1 = $_POST['nome_opcao_1'];
$curso_opcao_1 = $_POST['curso_opcao_1'];
$local_opcao_1 = $_POST['local_opcao_1'];

$nome_professor = $_POST['nome_professor'];
$email_professor = $_POST['email_professor'];
$departamento_professor = $_POST['departamento_professor'];


$query3 = "INSERT INTO candidato_opcao_universidade (matricula, edital, nome, curso, local) VALUES ('" . $_SESSION['matricula'] . "', '" . $edital . "', '" . $nome_opcao_1 . "', '" . $curso_opcao_1 . "',"
        . " '" . $local_opcao_1 . "')";

conecta_insere($query3);

$query6 = "INSERT INTO candidaturas (matricula, nome, edital, nome_professor_carta, email_professor_carta, departamento_professor_carta) VALUES ('" . $_SESSION['matricula'] . "', '" . $_SESSION['nome'] . "', '" . $edital . "', '" . $nome_professor . "', '" . $email_professor . "',"
        . " '" . $departamento_professor . "')";

conecta_insere($query6);

$data_atual = date('Y-m-d');

$query7 = "INSERT INTO historico_candidatos(matricula, edital, data) VALUES ('" . $_SESSION['matricula'] . "','" . $edital. "','" . $data_atual . "')";

conecta_insere($query7);

//echo "<script>alert('Sua candidatura foi realizada com sucesso!');</script>";

header("refresh: 0; url=candidato_inscricoes.php");
?>