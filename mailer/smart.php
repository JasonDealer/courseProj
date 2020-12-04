<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$mail->isSMTP();                                    
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;                               
$mail->Username = 'tester469515@mail.ru';                 // логин
$mail->Password = 'Aa46954695';                           // пароль
$mail->SMTPSecure = 'ssl';                          
$mail->Port = 465;                                    
 
$mail->setFrom('tester469515@mail.ru', 'HealthyFood');   // От кого письмо 
$mail->addAddress('makcxx21@gmail.com');     // Кому письмо
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Логотип компании
$mail->isHTML(true);

$mail->Subject = 'Пользователь оставил новую заявку';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	Номер телефона: ' . $phone . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>