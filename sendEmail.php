<?php 


use PHPMailer\PHPMailer\PHPMailer;


if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];



    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "mail-host.com";
    $mail->SMTPAuth = true;
    $mail->Username = "your@email.com";
    $mail->Password = 'email-password';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";


    //email postavke

    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("your@email.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()) {
        $status = "success";
        $response = "Email je poslan!";

    } else {
        $status = "failed";
        $response = "Nesto nije uredu: <br>". $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));

}



?>