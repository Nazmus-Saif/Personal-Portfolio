<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/PHPMailer.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        try {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'your email';
            $mail->Password   = 'app password';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('email', 'Your Name');
            $mail->addAddress('email', 'Recipient Name');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "Sender: $name. <br>
                              Email: $email. <br>
                              Subject: $subject. <br>
                              Message: $message.";

            $mail->send();

            echo "Message Sent Successfully!";
        } catch (Exception $e) {
            echo "Message Sending Failed!";
        }
    }
?>
