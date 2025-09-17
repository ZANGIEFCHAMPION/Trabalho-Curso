<?php
include("conexao.php");

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Função para limpar entrada
    function limpar($dado) {
        return htmlspecialchars(trim($dado));
    }

    // Checkbox múltipla escolha (melhor)
    $melhor_array = $_POST['melhor'] ?? [];
    $melhor_json = json_encode($melhor_array); // Agora é JSON de verdade

    // Perguntas técnicas
    $q1 = limpar($_POST['q1'] ?? '');
    $q2 = limpar($_POST['q2'] ?? '');
    $q3 = limpar($_POST['q3'] ?? '');
    $q4 = limpar($_POST['q4'] ?? '');
    $q5 = limpar($_POST['q5'] ?? '');

    // Perguntas pessoais
    $continuar = limpar($_POST['continuar'] ?? '');
    $faculdade = limpar($_POST['faculdade'] ?? '');
    $curso = limpar($_POST['curso'] ?? '');
    $parar = limpar($_POST['parar'] ?? '');

    // Prepara a inserção
    $stmt = $conn->prepare("INSERT INTO respostas 
        (melhor, q1, q2, q3, q4, q5, continuar, faculdade, curso, parar) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssss", 
        $melhor_json, $q1, $q2, $q3, $q4, $q5, 
        $continuar, $faculdade, $curso, $parar
    );

    // Executa e retorna resposta
    if ($stmt->execute()) {
        echo "Respostas salvas com sucesso!";
    } else {
        echo "Erro ao salvar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Acesso inválido!";
}
?>
