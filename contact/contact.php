<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$mail_to = 'contact@georgebarnick.com';
$subject = 'Message from georgebarnick.com visitor ' . $field_name;
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;
$headers = "From: ".$field_email."\r\n";
$headers .= "Reply-To: ".$field_email."\r\n";
if ( $field_email != null && $field_message != null ) {
	$mail_status = mail( $mail_to, $subject, $body_message, $headers );
}
if ( $mail_status && $field_email != null && $field_message != null ) {
	if( isset( $_POST['g-recaptcha-response'] ) && !empty( $_POST['g-recaptcha-response'] ) ) {
		require_once( 'secret.php' );
		$verifyResponse = file_get_contents( 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response'] );
		$responseData = json_decode( $verifyResponse );
		if( $responseData->success ) { ?>
			<script language="javascript" type="text/javascript">
				window.location = '/contact/?result=success';
			</script>
		<?php } else { ?>
			<script language="javascript" type="text/javascript">
				window.location = '/contact/?result=verificationfail&name=<?php echo $field_name; ?>&email=<?php echo $field_email; ?>&message=<?php echo $field_message ?>#Contact';
			</script>
		<?php }
	}
} else { ?>
    <script language="javascript" type="text/javascript">
		window.location = '/contact/?result=error&name=<?php echo $field_name; ?>&email=<?php echo $field_email; ?>&message=<?php echo $field_message ?>#Contact';
    </script>
<?php
}?>
