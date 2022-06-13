
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['Submit']) && $_POST['email'])
{
include "db.php";
$result = mysqli_query($conn,"SELECT * FROM personal_info WHERE email='" . $_POST['email'] . "'");
$row= mysqli_num_rows($result);
$email = $_POST['email'];
$fname= $_POST['FirstName'];
$chk1=implode(", ",$_POST['chk1']);
$chk2=implode(", ",$_POST['chk2']);
$chk3=implode(", ",$_POST['chk3']);
$chk4=implode(", ",$_POST['chk4']);
$chk5=implode(", ",$_POST['chk5']);



if($row < 1)
{


mysqli_query($conn, "INSERT INTO personal_info(FirstName,LastName, email,ProfAddress,ResidentialAddress,chk1,chk2,chk3,chk4,chk5,AcademicQualification,Occupation,Nationality,Phone,langSpoken,volunteering) VALUES('" . $_POST['FirstName'] . "','" . $_POST['LastName'] . "', '" . $_POST['email'] . "',  '" . $_POST['ResidentialAddress'] . "', '" . $_POST['ProfAddress'] . "','$chk1','$chk2','$chk3','$chk4','$chk5','" . $_POST['AcademicQualification'] . "','" . $_POST['Occupation'] . "','" . $_POST['Nationality'] . "','" . $_POST['Phone'] . "','" . $_POST['langSpoken'] . "','" . $_POST['volunteering'] . "')");

        
    

require 'vendor/autoload.php';


$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;                  
// GMAIL username
$mail->Username = "19ee145@psgitech.ac.in";
// GMAIL password
$mail->Password = "swetha.123";
$mail->SMTPSecure = "ssl";  
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = "465";
$mail->From='19ee145@psgitech.ac.in';
$mail->FromName='swetha';
$mail->AddAddress($email, 'swe');
$mail->Subject  =  'Confirmation Mail';
$mail->IsHTML(true);
$mail->Body = 'Hello! '.$fname . ' Thank You for showing interest in volunteering with us';
if($mail->Send())
{
echo "Thank you for your interest in volunteering!!!! \n please check your mail for further details";
}
else
{
echo "Mail Error - >".$mail->ErrorInfo;
}
}
else
{
echo "You have already registered with us. Check Your email box and verify email.";
}
}
?>