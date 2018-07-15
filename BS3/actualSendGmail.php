<?php
 include './assets/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send HTML Email from Localhost using PHP and PHPMailer</title>
</head>
<body bgcolor="#6ba2f9">
<div class="container">
	<div class="row">
	<!--	<h1>Send HTML Email from Localhost using PHP and PHPMailer</h1> -->
		<div class="col-md-6">
			<?php
				echo $name=$_POST['name'];
				echo $number = $_POST['number'];
				echo $feedback = $_POST['feedback'];
				
				require 'PHPMailer/PHPMailerAutoload.php';
				$mail = new PHPMailer;

				$mail->isSMTP();                                   // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                            // Enable SMTP authentication
				$mail->Username = 'tejapolisetty143@gmail.com';          // SMTP username
				$mail->Password = 'rasengannojutsublue'; // SMTP password
				$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                 // TCP port to connect to

				$mail->setFrom('tejapolisetty143@gmail.com', 'teja Innovation');
				#$mail->addReplyTo('tejapolisetty143@gmail.com', 'InnovationPortal');
                // $mail->addAddress($email); 
                $vik = 'tejapolisettys47@gmail.com';
                $mail->addAddress($vik); 
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');

				$mail->isHTML(true);  // Set email format to HTML

				#$bodyContent = '<h1>How to Send HTML Email using PHP in Localhost by Weidea4u</h1>';
				$bodyContent = '<p>This is the email sent from <b>InnovationPortal</b></p>';
				//getting values of all attributes of particular prouct name
		
			$bodyContent .="Name of the organisation  = ".$name."<br> ";
			$bodyContent .="Name of the Product  = ".$number."<br> ";
			$bodyContent .="Innovator Name  = ".$feedback."<br> ";
			

				$mail->Subject = 'Mail from teja using php';
				$mail->Body    = $bodyContent;
							$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

				if(!$mail->send()) {
				    ?>
				    <div class="alert alert-danger alert-dismissable fade in">
				   	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   		Message could not be sent.
				   	</div>
				    <?php
					header("location:dashboard.php");
				} else {
				    ?>
				   	<div class="alert alert-success alert-dismissable fade in">
				   	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   		Message has been sent
				   	</div>
				    <?php
					// header("location:adminnotifications.php");
				}
			
			?>
			
		</div>
	</div>
</div>
</body>
</html>