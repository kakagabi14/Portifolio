<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Aqui você pode enviar a mensagem por e-mail ou armazená-la em um banco de dados
    $to = "seu-email@example.com"; // Troque pelo seu email
    $subject = "Mensagem de Contato de $nome";
    $body = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>