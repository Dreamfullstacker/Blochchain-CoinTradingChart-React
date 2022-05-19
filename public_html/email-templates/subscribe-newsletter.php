<?php
if( ! empty( $_POST['email'] ) ) {

	// Enable / Disable Mailchimp
	$enable_mailchimp = 'no'; // yes OR no

	// Enable / Disable SMTP
	$enable_smtp = 'no'; // yes OR no

	// Email Receiver Address
	$receiver_email = 'info@yourdomain.com';

	// Email Receiver Name for SMTP Email
	$receiver_name 	= 'Your Name';

	// Email Subject
	$subject 	= 'Subscribe Newsletter form details';

	// Google reCaptcha V3 Key
	$grecaptchav3_secret_key = '';

	$email 	= $_POST['email'];

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

	if( $enable_mailchimp == 'no' ) { // Simple / SMTP Email

		$name 	= isset( $_POST['name'] ) ? $_POST['name'] : '';

		$message = '
		<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
		<td colspan="2" align="center" valign="top"><img style=" margin-top: 15px; " src="http://www.yourdomain.com/images/logo-email.png" ></td>
		</tr>
		<tr>
		<td width="50%" align="right">&nbsp;</td>
		<td align="left">&nbsp;</td>
		</tr>';
		if( ! empty( $name ) ) {
			$message .= '<tr>
			<td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Name:</td>
			<td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $name . '</td>
			</tr>';
		}
		$message .= '<tr>
		<td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Email:</td>
		<td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $email . '</td>
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
			$headers .= 'From: <' . $email . '>' . "\r\n";
			if( mail( $receiver_email, $subject, $message, $headers ) ) {
				
				// Redirect to success page
				$redirect_page_url = ! empty( $_POST['redirect'] ) ? $_POST['redirect'] : '';
				if( ! empty( $redirect_page_url ) ) {
					header( "Location: " . $redirect_page_url );
					exit();
				}

			   	//Success Message
			  	echo '{ "alert": "alert-success", "message": "Your message has been sent successfully subscribed to our email list!" }';
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
			  	echo '{ "alert": "alert-success", "message": "Your message has been sent successfully subscribed to our email list!" }';
			} else {
				//Fail Message
			  	echo '{ "alert": "alert-danger", "message": "Your message could not been sent!" }';
			}
		}

	} else { // Mailchimp

		$api_key 	= 'YOUR_MAILCHIMP_API_KEY'; // Your MailChimp API Key
		$list_id 	= 'YOUR_MAILCHIMP_LIST_ID'; // Your MailChimp List ID
		$status 	= 'subscribed';
		$f_name		= ! empty( $_POST['name'] ) ? $_POST['name'] : substr( $email, 0, strpos( $email,'@' ) );

		$data = array(
			'apikey'        => $api_key,
	    	'email_address' => $email,
			'status'        => $status,
			'merge_fields'  => array( 'FNAME' => $f_name )
		);
		$mch_api = curl_init(); // initialize cURL connection
	 
		curl_setopt( $mch_api, CURLOPT_URL, 'https://' . substr( $api_key, strpos( $api_key, '-' ) + 1 ) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5( strtolower( $data['email_address'] ) ) );
		curl_setopt( $mch_api, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:' . $api_key ) ) );
		curl_setopt( $mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0' );
		curl_setopt( $mch_api, CURLOPT_RETURNTRANSFER, true ); // return the API response
		curl_setopt( $mch_api, CURLOPT_CUSTOMREQUEST, 'PUT' ); // method PUT
		curl_setopt( $mch_api, CURLOPT_TIMEOUT, 10 );
		curl_setopt( $mch_api, CURLOPT_POST, true );
		curl_setopt( $mch_api, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $mch_api, CURLOPT_POSTFIELDS, json_encode( $data ) ); // send data in json
	 
		$result	= curl_exec( $mch_api );
		$result = ! empty( $result ) ? json_decode( $result ) : '';

		if ( ! empty( $result->status ) AND $result->status == 'subscribed' ) {
			
			// Redirect to success page
			$redirect_page_url = ! empty( $_POST['redirect'] ) ? $_POST['redirect'] : '';
			if( ! empty( $redirect_page_url ) ) {
				header( "Location: " . $redirect_page_url );
				exit();
			}

		   	//Success Message
			echo '{ "alert": "alert-success", "message": "Your message has been sent successfully subscribed to our email list!" }';
		} else {
			//Fail Message
			echo '{ "alert": "alert-danger", "message": "Your message could not been sent!" }';
		}
	}
} else {
	//Empty Email Message
	echo '{ "alert": "alert-danger", "message": "Please add an email address!" }';
}