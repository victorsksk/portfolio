<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Sanitiza e valida email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email inválido.");
    }

    // 2. Telefone: valor combinado do código do país e número local (ex: +55 (XX) XXXXX-XXXX)

    $phone = trim($_POST['phone']);
    if (empty($phone)) {
        die("Telefone inválido.");
    }

    // 3. Mensagem
    $message = htmlspecialchars(trim($_POST['message']));

    // 4. Cria uma instância do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP (exemplo usando Gmail)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';         // Servidor SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'victorgabrielsm2003@gmail.com';       // Seu endereço de e-mail
        $mail->Password   = 'xjih mtgu tqug bsxs';  // Sua senha ou App Password (recomendado)
        $mail->SMTPSecure = 'tls';                      // ou 'ssl'
        $mail->Port       = 587;                        // Porta TLS (ou 465 para SSL)

        // Remetente e destinatário
        $mail->setFrom($email, 'Contato via Site');
        $mail->addAddress('victorgabrielsm2003@gmail.com', 'Victor Gabriel');

        // Conteúdo do e-mail
        $mail->isHTML(false); // Enviar como texto simples
        $mail->Subject = 'Nova mensagem do formulário de contato';
        $mail->Body    = "Email: $email\nTelefone: $phone\nMensagem:\n$message";

        // Envia o e-mail
        $mail->send();
        echo "Mensagem enviada com sucesso!";
    } catch (Exception $e) {
        echo "Falha ao enviar a mensagem. Erro: {$mail->ErrorInfo}";
    }
} else {
    echo "Método inválido.";
}
?>