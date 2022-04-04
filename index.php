<?php
include('smtp/PHPMailerAutoload.php');
$html='Msg';

$to = "RECIVER EMAILID";
$from ="MAIL_FROM";
$subject = "Attachment Subject";
 $msg = "testing";
// attach file 

$attachment="uploads/pdf.pdf";


	$mail = new PHPMailer(); 
	// $mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "USER_EMAIL_ID";
	$mail->Password = "EMAIL_PASSWORD";
	$mail->SetFrom("FROM_EMAIL_ID,$from");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAttachment($attachment);
	$mail->AddAddress($to,);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'SENT SUCCESSFULLY';
	}

?>
