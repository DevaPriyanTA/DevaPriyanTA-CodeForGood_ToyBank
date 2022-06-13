<?php
//send_mail.php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
if(isset($_POST['email_data']))
{
	require 'class/class.phpmailer.php';
	$output = '';
	foreach($_POST['email_data'] as $row)
	{
		$mail = new PHPMailer();
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->SMTPKeepAlive = true;   
		//$mail->Mailer = “smtp”; // don't change the quotes!
		$mail->Host = 'ssl://smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = '***********';					//Sets SMTP username
		$mail->Password = '************';					//Sets SMTP password
		$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = '************';			//Sets the From email address for the message
		$mail->FromName = 'ToyBank';					//Sets the From name of the message
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = 'Event at toybank'; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		<p>An Event is been hosted which suits your interests, Please reply back acknowleding your presence.</p>
		<p> Thank You,</p>
		<p>Toy Bank</p>
		';

		$mail->AltBody = '';

		$result = $mail->Send();						//Send an Email. Return true on success or false on error

		if($result == false)
		{
			echo "Mail Error - >".$mail->ErrorInfo;
		}

		

	}
	if($output == '')
	{
		echo 'ok';
	}
	else
	{
		echo $output;
	}
}

?>