<?php
ob_start();




require 'PHPMailer/PHPMailerAutoload.php';

$to = $_GET['eid'];
$sub = "subject name";
$con = "Your new password is".$_GET['pass1'];

echo $to;
echo $sub;
echo $con;

$mail = new PHPMailer;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'f201506100110094@gmail.com';          // SMTP username
$mail->Password = '77338382'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('f201506100110094@gmail.com', 'pratik chaudhari');
//$mail->addReplyTo('14mscit084@gmail.com', 'yash patel');
$mail->addAddress($to);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML



$mail->Subject = $sub;
$mail->Body    = $con;
//$filename="C:\xampp\htdocs\MINproject_UTHFEST\file\User_Detail_Reoprt (16).xls";
//$mail->addStringAttachment("data", $filename);
//$mail->addAttachment($_FILES[$filename]);
//$mail->addAttachment($_SERVER["DOCUMENT_ROOT"] . "C:\xampp\htdocs\MINproject_UTHFEST\file\User_Detail_Reoprt (16).xls","hunter.pdf");

echo "befor if";
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
header("location:Login.php");
?>
