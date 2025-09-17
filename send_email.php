<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // ajuste caso o autoload esteja em outro caminho

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Pegando os dados do formulário
    $nome     = $_POST['nome'] ?? '';
    $email    = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    try {
        // Configuração SMTP Gmail
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'diegomiranda1310@gmail.com';  // coloque seu Gmail aqu
        $mail->Password   = 'huow ubkl fhwi ktes';    // senha de app que você gerou
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;    

        // Remetente e destinatário
        $mail->setFrom('diegomiranda1310@gmail.com', 'Formulário DoeLeitura');
        $mail->addAddress('diegomirandadasilva1310@gmail.com'); // seu Gmail de teste

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Agendamento de Doação de Livros';
        $mail->Body    = "
            <strong>Nome:</strong> {$nome} <br>
            <strong>Email:</strong> {$email} <br>
            <strong>Telefone:</strong> {$telefone} <br>
            <strong>Mensagem:</strong><br>{$mensagem}
        ";

        $mail->send();

        header('Location: index.php');
    } catch (Exception $e) {
        echo "<p style='color:red;'>❌ Erro no envio: {$mail->ErrorInfo}</p>";
    }
}
?>


