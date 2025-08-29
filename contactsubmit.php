<?php
require 'vendor/autoload.php'; // Composer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data safely
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['msg']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nigar5678919@gmail.com'; 
        $mail->Password   = 'wgeiflxihwcsdxwz';         
        $mail->SMTPSecure = 'tls';                   
        $mail->Port       = 587;                   

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('arcott21@yahoo.com', 'Website Admin'); 

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $subject";
        $mail->Body    = "
            <h3>New Message from Contact Form</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Subject:</b> $subject</p>
            <p><b>Message:</b><br> $message</p>
        ";

        $mail->send();

        // Redirect to thankyou page after success
        header("Location: thankyou.php");
        exit();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
