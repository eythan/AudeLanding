<?php
namespace App\Controller;

use App\Core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController extends Controller
{
    public function send()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /');
            exit;
        }

        $nom     = $_POST['nom'] ?? '';
        $email   = $_POST['email'] ?? '';
        $tel     = $_POST['tel'] ?? '';
        $projet  = $_POST['projet'] ?? '';
        $message = $_POST['message'] ?? '';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['MAIL_USERNAME'];
            $mail->Password   = $_ENV['MAIL_PASSWORD'];
            $mail->Port       = $_ENV['MAIL_PORT'];

            $mail->SMTPSecure = ($_ENV['MAIL_ENCRYPTION'] === 'ssl')
                ? PHPMailer::ENCRYPTION_SMTPS
                : PHPMailer::ENCRYPTION_STARTTLS;

            $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
            $mail->addAddress($_ENV['MAIL_TO_ADDRESS']);
            $mail->addReplyTo($email, $nom);

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = "Nouveau projet : $projet de $nom";

            $mail->Body = "
                <p><strong>Nom :</strong> {$nom}</p>
                <p><strong>Email :</strong> {$email}</p>
                <p><strong>Téléphone :</strong> {$tel}</p>
                <p><strong>Type de projet :</strong> {$projet}</p>
                <p><strong>Détails :</strong> {$message}</p>
            ";

            $mail->AltBody = "Nouveau projet de $nom ($email). Tel: $tel. Type: $projet. Message: $message";

            $mail->send();
            $_SESSION['success'] = true;
            $referer = $_SERVER['HTTP_REFERER'] ?? '/';
            header('Location: ' . $referer . '#contact');
            exit;
        } catch (Exception $e) {
            $_SESSION['success'] = false;
            $referer = $_SERVER['HTTP_REFERER'] ?? '/';
            header('Location: ' . $referer . '#contact');
            exit;
        }
    }
}