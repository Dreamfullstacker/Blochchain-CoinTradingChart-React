<?php
if( ! empty( $_POST['email'] ) ) {

	// Enable / Disable SMTP
	$enable_smtp = 'no'; // yes OR no

	// Email Receiver Address
	$receiver_email = 'info@yourdomain.com';

	// Email Receiver Name for SMTP Email
	$receiver_name 	= 'Your Name';

	// Email Subject
	$subject = 'Contact form details';

	// Google reCaptcha V3 Key
	$grecaptchav3_secret_key = '';

	$from 	= $_POST['email'];
	$name 	= isset( $_POST['name'] ) ? $_POST['name'] : '';
	$phone 	= isset( $_POST['phone'] ) ? $_POST['phone'] : '';
	$comment= isset( $_POST['comment'] ) ? $_POST['comment'] : '';
	
	if( ! empty( $grecaptchav3_secret_key ) && ! empty( $_POST['g-recaptcha-response'] ) ) {

		$token = $_POST['g-recaptcha-response'];

		// call curl to POST request
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( array( 'secret' => $grecaptchav3_secret_key, 'response' => $token ) ) );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$arrResponse = json_decode($response, true);

		// verify the response
		if( isset( $_POST['action'] ) && ! ( isset( $arrResponse['success'] ) && $arrResponse['success'] == '1' && $arrResponse['action'] == $_POST['action'] && $arrResponse['score'] >= 0.5 ) ) {

			echo '{ "alert": "alert-danger", "message": "Your message could not been sent due to invalid reCaptcha!" }';
			die;

		} else if( ! isset( $_POST['action'] ) && ! ( isset( $arrResponse['success'] ) && $arrResponse['success'] == '1' ) ) {

			echo '{ "alert": "alert-danger", "message": "Your message could not been sent due to invalid reCaptcha!" }';
			die;
		}
	}

	$message = '
		<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
		<td colspan="2" align="center" valign="top"><img style="margin-top: 15px;" src="http://www.yourdomain.com/images/logo-email.png" ></td>
		</tr>
		<tr>
		<td width="50%" align="right">&nbsp;</td>
		<td align="left">&nbsp;</td>
		</tr>
		<tr>
		<td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Name:</td>
		<td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $name . '</td>
		</tr>
		<tr>
		<td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Email:</td>
		<td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $from . '</td>
		</tr>
		<tr>
		<td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Phone:</td>
		<td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $phone . '</td>
		</tr>
		<tr>
		<td align="right" valign="top" style="border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Message:</td>
		<td align="left" valign="top" style="border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . nl2br( $comment ) . '</td>
		</tr>
		</table>
		</body>
		</html>
		';

	if( $enable_smtp == 'no' ) { // Simple Email

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headers .= 'From: ' . $name . ' <' . $from . '>' . "\r\n";
		if( mail( $receiver_email, $subject, $message, $headers ) ) {

			// Redirect to success page
			$redirect_page_url = ! empty( $_POST['redirect'] ) ? $_POST['redirect'] : '';
			if( ! empty( $redirect_page_url ) ) {
				header( "Location: " . $redirect_page_url );
				exit();
			}

		   	//Success Message
		  	echo '{ "alert": "alert-success", "message": "Your message has been sent successfully!" }';
		} else {
			//Fail Message
		  	echo '{ "alert": "alert-danger", "message": "Your message could not been sent!" }';
		}
		
	} else { // SMTP

		// Email Receiver Addresses
		$toemailaddresses = array();
		$toemailaddresses[] = array(
			'email' => $receiver_email, // Your Email Address
			'name' 	=> $receiver_name // Your Name
		);

		require 'phpmailer/Exception.php';
		require 'phpmailer/PHPMailer.php';
		require 'phpmailer/SMTP.php';

		$mail = new PHPMailer\PHPMailer\PHPMailer();

		$mail->isSMTP();
		$mail->Host     = 'YOUR_SMTP_HOST'; // Your SMTP Host
		$mail->SMTPAuth = true;
		$mail->Username = 'YOUR_SMTP_USERNAME'; // Your Username
		$mail->Password = 'YOUR_SMTP_PASSWORD'; // Your Password
		$mail->SMTPSecure = 'ssl'; // Your Secure Connection
		$mail->Port     = 465; // Your Port
		$mail->setFrom( $from, $name );
		
		foreach( $toemailaddresses as $toemailaddress ) {
			$mail->AddAddress( $toemailaddress['email'], $toemailaddress['name'] );
		}

		$mail->Subject = $subject;
		$mail->isHTML( true );

		$mail->Body = $message;

		if( $mail->send() ) {
			
			// Redirect to success page
			$redirect_page_url = ! empty( $_POST['redirect'] ) ? $_POST['redirect'] : '';
			if( ! empty( $redirect_page_url ) ) {
				header( "Location: " . $redirect_page_url );
				exit();
			}

		   	//Success Message
		  	echo '{ "alert": "alert-success", "message": "Your message has been sent successfully!" }';
		} else {
			//Fail Message
		  	echo '{ "alert": "alert-danger", "message": "Your message could not been sent!" }';
		}
	}
} else {
	//Empty Email Message
	echo '{ "alert": "alert-danger", "message": "Please add an email address!" }';
}