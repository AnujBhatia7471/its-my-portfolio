<!-- <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_message()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'email';
        $mail->Password = 'password';

        $mail->setFrom($email, $name);
        $mail->addAddress('email', 'Anuj Bhatia');
        $mail->Subject = 'Portfolio contact mail';
        $mail->Body = $message;

        if ($mail->send()) {
            echo "<script>alert('Email sent successfully!'); 
            		window.location.href = 'contact.php';</script>";
        } else {
            echo "<script>alert('Failed to send email. Error: " . $mail->ErrorInfo . "');
            		window.location.href = 'contact.php';</script>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    send_message();
}
?> -->
