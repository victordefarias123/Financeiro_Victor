<?php
include_once("../includes/conexao.php"); // ajuste se necessário

$data = $_POST['datafinanceiro'] ?? '';
$tipo = $_POST['tipofinanceiro'] ?? '';
$valor = $_POST['valorfinanceiro'] ?? '';
$descricao = $_POST['descricaofinanceiro'] ?? '';

// Transforma o valor em negativo se for despesa
if (strtoupper(trim($tipo)) === 'D') {
    $valor = -abs($valor); // Garante que seja negativo
}

// Salvar no banco
$sql = "INSERT INTO extrato (data, tipo, valor, descricao) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "ssds", $data, $tipo, $valor, $descricao);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    header("Location: ../extrato.php");
    exit;
} else {
    echo "Erro ao salvar.";
}
