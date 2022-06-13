
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['Submit']) )
{
    include "db.php";
    $chk1=implode(", ",$_POST['chk1']);
    $chk2=implode(", ",$_POST['chk2']);
    $chk3=implode(", ",$_POST['chk3']);
    $edate = date('Y-m-d', strtotime($_POST['eventdate']));

    mysqli_query($conn, "INSERT INTO event_info(EventName,Description1, eventdate,chk1,chk2,chk3) VALUES('" . $_POST['EventName'] . "','" . $_POST['Description1'] . "', '$edate', '$chk1','$chk2','$chk3')");
    require 'vendor/autoload.php';
}
header("location: send-multiple-email-using-phpmailer-with-php-ajax\llink.php");
?>

     