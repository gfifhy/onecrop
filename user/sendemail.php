<?php
session_start();
	include '../include/conn.php';
	include '../include/functions.php';
	





if($_SESSION['user_email']){
	$email = $_SESSION['user_email'];
	if(rowNumber1("buyer", "email", $email)>0){
		$_SESSION['user_type'] = "Buyer";
	}
	if(rowNumber1("seller", "email",$email)>0){
		$_SESSION['user_type'] = "Farmer";
	}

	if($_SESSION['user_type'] == "Farmer"){
        $name = selectData("seller", "first_name", "email", $email);
        $code = selectData("seller", "vcode", "email", $email);
	}
	if($_SESSION['user_type'] == "Buyer"){
        $name = selectData("buyer", "first_name", "email", $email);
        $code = selectData("buyer", "vcode", "email", $email);

	}
}




$body = "<html xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns=\"http://www.w3.org/1999/xhtml\"><head>

<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
<meta content=\"width=device-width\" name=\"viewport\">

<meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">

<title></title>

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://fonts.googleapis.com/css?family=Ubuntu\" rel=\"stylesheet\" type=\"text/css\">

<style type=\"text/css\">
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
<style id=\"media-query\" type=\"text/css\">
		@media (max-width: 520px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}

			.block-grid {
				width: 100% !important;
			}

			.col {
				width: 100% !important;
			}

			.col_cont {
				margin: 0 auto;
			}

			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num2 {
				width: 16.6% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num5 {
				width: 41.6% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num7 {
				width: 58.3% !important;
			}

			.no-stack .col.num8 {
				width: 66.6% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.no-stack .col.num10 {
				width: 83.3% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
</head>
<body style=\"margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;\" class=\"clean-body\">

<table bgcolor=\"#FFFFFF\" cellpadding=\"0\" cellspacing=\"0\" class=\"nl-container\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top;\" valign=\"top\">

<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">


<div class=\"col num12\" style=\"min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;\">
<div class=\"col_cont\" style=\"width:100% !important;\">

<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">

<div align=\"center\" class=\"img-container center fixedwidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<img align=\"center\" alt=\"logo\" border=\"0\" class=\"center fixedwidth\" src=\"https://i.ibb.co/c2rQRX9/logo-landscape.png\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 300px; display: block;\" title=\"logo\" width=\"300\">
<div style=\"font-size:1px;line-height:40px\">&nbsp;</div>

</div>

<div style=\"color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;\">
<p style=\"font-size: 14px; line-height: 1.2; text-align: left; word-break: break-word; font-family: Montserrat, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 17px; margin: 0;\"><strong><span style=\"font-size: 22px;\">
	Hi ".$name.",

</span></strong></p>
</div>
</div>


<div style=\"color:#000000;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; color: #000000; mso-line-height-alt: 14px;\">
<p style=\"line-height: 1.2; word-break: break-word; font-family: Montserrat, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; font-size: 14px; mso-line-height-alt: 17px; margin: 0;\"><span style=\"font-size: 14px;\">Please click the button below to verify your email address.</span></p>
</div>
</div>
<div align=\"center\" class=\"button-container\" style=\"padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">


		<a href=\"http://localhost/onecrop/user/verifyuser.php?code=".$code."\" style=\"-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #5bbc71; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: auto; width: auto; border-top: 1px solid #5bbc71; border-right: 1px solid #5bbc71; border-bottom: 1px solid #5bbc71; border-left: 1px solid #5bbc71; padding-top: 7px; padding-bottom: 7px; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;\" target=\"_blank\">



	<span style=\"padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;\">
		<span style=\"font-size: 16px; line-height: 2; word-break: break-word; font-family: Montserrat, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 32px;\">
		Verify Email Address</span></span></a>
</div>

<div style=\"color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:25px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;\">
<p style=\"line-height: 1.2; word-break: break-word; font-family: Montserrat, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; font-size: 14px; mso-line-height-alt: 17px; margin: 0;\"><span style=\"font-size: 14px;\">If you did not create an account, no further action is required.</span></p>
</div>
</div>


<div style=\"color:#555555;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:25px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;\">
<p style=\"font-size: 14px; line-height: 1.2; word-break: break-word; font-family: Montserrat, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 17px; margin: 0;\">Regards,</p>
<p style=\"font-size: 14px; line-height: 1.2; word-break: break-word; font-family: Montserrat, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; mso-line-height-alt: 17px; margin: 0;\">One Crop</p>
</div>
</div>

</div>

</div>
</div>


</div>
</div>
</div>

</td>
</tr>
</tbody>
</table>


</body></html>";

?>








































<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/src/class.smtp.php';
require '../vendor/phpmailer/src/Exception.php';
require '../vendor/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/src/SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
	//Server settings
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                     // Enable verbose debug output
	$mail->isSMTP();                                           // Send using SMTP
	$mail->Host       = 'ssl://smtp.gmail.com';                    // Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                  // Enable SMTP authentication
	$mail->Username   = 'onecrop2020@gmail.com';                      // SMTP username
	$mail->Password   = 'angpoginiga';                      // SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 465;                                   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	//Recipients
	$mail->setFrom('onecrop2020@onecrop.com');
	$mail->addAddress($email);     // Add a recipient
	//$mail->addAddress('jamessopogi@gmail.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	// Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Verify Your Email Address';
	$mail->Body    = $body;
	$mail->AltBody = 'EMAIL NOT SUPPORTED. CONTACT OUR SUPPORT';     //if hindi pwede html

	$mail->send();
	$_SESSION['successmessage'] = "Confirmation email has been sent.";
	header("location: verify.php");
	} catch (Exception $e) {
		$_SESSION['successmessage']= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		header("location: verify.php");
	}
?>


