<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $telefone = $_POST["phone"];
  $mensagem = $_POST["message"];

  // Configurar os cabeçalhos do e-mail
  $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "Content-Type: text/plain; charset=utf-8" . "\r\n";

  // Destinatário do e-mail
  $destinatario = "emaildopaypal007@email.com"; // Substitua pelo endereço de e-mail do destinatário

  // Assunto do e-mail
  $assunto = "Assunto do E-mail";

  // Montar o corpo do e-mail
  $corpo_email = "Nome: $nome\n";
  $corpo_email .= "Email: $email\n";
  $corpo_email .= "Telefone: $telefone\n";
  $corpo_email .= "Mensagem:\n$mensagem";

  // Enviar o e-mail
  if (mail($destinatario, $assunto, $corpo_email, $headers)) {
    echo "E-mail enviado com sucesso!";
  } else {
    echo "Ocorreu um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
  }
}
?>
