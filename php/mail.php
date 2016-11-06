<?
require("class.phpmailer.php");


	//form validation vars
	$formok = true;
	$errors = array();

	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');

	//form data
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


$mail = new PHPMailer();

$mail->IsSMTP();                                 		 // send via SMTP
$mail->Host     = "smtp.gmail.com"; 					 // SMTP server
$mail->SMTPAuth = true;    								 // turn on SMTP authentication
$mail->Username = "onboxtest@gmail.com"; 			     // SMTP username
$mail->Password = "Password.01";						 // SMTP password

$mail->From     = "onboxtest@gmail.com";				 // SMTP username
$mail->AddAddress("t");			  	 // Your Adress
$mail->Subject  =  "Nuova Mail dal sito Medical Sangallo !";
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
$mail->Body     =  "<p>Ehy hi ricevuto un messaggio dal sito internet!</p>
					  <p><strong>Nome: </strong> {$name} </p>
					  <p><strong>Email: </strong> {$email} </p>
					  <p><strong>Oggetto: </strong> {$subject} </p>
					  <p><strong>Testo del messaggio: </strong> {$message} </p>
					  <p>Questo Messaggio è stato inviato dall IP: {$ipaddress} il {$date} alle {$time}</p>";

if(!$mail->Send())
{
   echo "Mail non inviata <p>";
   echo "Errore Mailer: " . $mail->ErrorInfo;
   exit;
}

echo "Email Inviata";


?>
