<php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$user = $_ENV["USER"];
$pass = $_ENV["PASS"];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = $user;
$mail->Password   = $pass;

$mail->IsHTML(true);
$mail->AddAddress("samirbenzada@gmail.com", "samir");
$mail->SetFrom("samirbenzadaweb@gmail.com", "samir_web");
$mail->AddReplyTo("samirbenzadaweb@gmail.com", "reply-to-samir");
$mail->AddCC("sam.benzadal@gmail.com", "sam");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<h1>HAHAHA</h1></br></br><b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

$mail->Send()

<!-- $mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
} -->

?>