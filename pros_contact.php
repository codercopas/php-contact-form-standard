<?php

	session_start();
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = htmlspecialchars($_POST['name']); $email = htmlspecialchars($_POST['email']); $message = htmlspecialchars($_POST['message']);
		
		$_SESSION['name'] = $name; $_SESSION['email'] = $email; $_SESSION['message'] = $message;
		
		$error = "";
		
		if (empty($name) || empty($email) || empty($message)) {
			$error = "empty_fields";
		} else {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				if(sendmail($name, $email, $message)) {
					header("Location: success.php");
					exit();
				} else {
					$error = "email_failed";
				}
			} else {
				$error = "invalid_email";
			}
		}
		
		if($error!=="") {
			header("Location: error.php?error=" . $error);
			exit();
		}
	}
	
	function sendmail($name, $email, $message) {
		// Prepare the email
		$to = "contact@example.com"; // Replace with the recipient's email address
		$subject = "Form Submission from $name";
		$body = "Name: $name\nEmail: $email\nMessage: $message";
		$headers = "From: $email";

		// Send the email
		if (mail($to, $subject, $body, $headers)) {
			return true;
		} else {
			return false;
		}
	}
	
?>