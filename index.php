<?php
//include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//create instance of phpmailer 
$mail = new PHPMailer();
//set mailer to use smtp
$mail->isSMTP();
//define smtp host
$mail->Host = "smtp.gmail.com";
//enable smtp authentication
$mail->SMTPAuth = "true";
//set type of encryption(ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail username
$mail->Username = "peterwakoko@gmail.com";
//set gmail password
$mail->Password = ""; 
//set email subject
$mail->Subject = "PHPMailer Assignment.";
//set sender email
$mail->setFrom("peterwakoko@gmail.com");
//enable HTML
$mail->isHTML(true);
//Attachment
$mail->addAttachment('./img/peter.jpg');
//Email body 
$mail->Body = "
<div style='background-color:#8C8C8C; height:200px;   border-radius:10px;'>
<div>
<h1 style='text-align:center; color:#fff; padding:10px;'>Good afternoon Sir!</h1> 
</div>
<div>
<p style='text-align:center; color:#fff; padding:10px;'>I think I have somehow cracked the assignment.</p>
<p style='text-align:center; color:#fff; padding:10px;'>Thanks.<p>
</div>
</div>";
//Add recipient
$mail->addAddress("peterwakoko@gmail.com");
//Finally send email
if ($mail->send()){
    echo "Email sent..!";
}else{
echo "Error..!";
}
//Closing smtp connection
$mail->smtpClose();
?>