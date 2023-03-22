<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer(true);
$email->isSMTP();
$email->Host = 'smtp.gmail.com';
$email->SMTPAuth = true;
$email->Username = 'oliveiradody07@gmail.com';
$email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$email->Port = 465;

