<?php
require_once('db_connect.php');
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$issue=$_POST['issue'];
$device=$_POST['device'];
$model=$_POST['model'];
$brand=$_POST['brand'];



// die();	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);


$mail->SMTPDebug = 0;                               
$mail->isSMTP();            
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;             
$mail->Username = "vivekkumar240898@gmail.com";                 
$mail->Password = "xbpgbkuboybegkcj";           
$mail->SMTPSecure = "tls";   
$mail->Port = 587;                                   

$mail->From = "vivekkumar240898@gmail.com";
$mail->FromName = "Thanks for contacting Fixxit India";

$mail->addAddress("vkr1118@barrownzgroup.com");
$mail->isHTML(true);

$mail->Subject = "Thanks for contacting Fixxit India";
$mail->Body = "Name:".$name."<br/><br/>Mobile:".$mobile."</br></br> Device Name:".$device."</br></br> Brand Name:".$brand."</br></br>
Model Name:".$model."</br></br>Issue Name:".$issue."</br></br>";
$result=$mail->Send();
        if(!$result) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }else {
                echo $result;  
        } 

?>